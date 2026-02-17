// Side bar active class
document.addEventListener('DOMContentLoaded', function() {
  const sidebarLinks = document.querySelectorAll('.sidebar-link');
  const pageTitle = document.getElementById('page-title');

  sidebarLinks.forEach(link => {
      link.addEventListener('click', function(e) {
          if (this.classList.contains('text-red-500')) return;
          sidebarLinks.forEach(l => l.classList.remove('sidebar-active'));
          this.classList.add('sidebar-active');
          if (pageTitle) {
              const text = this.querySelector('span').innerText;
              pageTitle.innerText = text;
          }
      });
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const headerLinks = document.querySelectorAll(".header-link");
  headerLinks.forEach(link => {
      link.addEventListener("click", function() {
          headerLinks.forEach(l => l.classList.remove("active-tab"));
          this.classList.add("active-tab");
      });
  });
});

const tabItems = document.querySelectorAll('.tab-item');
tabItems.forEach(tab => {
  tab.addEventListener('click', () => {
      tabItems.forEach(t => {
          t.classList.remove('tab-active', 'shadow-lg');
          t.classList.add('tab-inactive');
      });
      tab.classList.remove('tab-inactive');
      tab.classList.add('tab-active', 'shadow-lg');
  });
});

// File Upload Logic
const fileInput = document.getElementById('file-input');
const fileList = document.getElementById('file-list');

if (fileInput) {
  fileInput.addEventListener('change', function(e) {
      if (this.files.length > 0) {
          fileList.classList.remove('hidden');
          fileList.innerHTML = '<p class="text-primary-600 font-normal text-[1rem]">Selected Files</p>';
          Array.from(this.files).forEach(file => {
              const size = (file.size / 1024 / 1024).toFixed(2);
              const item = document.createElement('div');
              item.className = 'file-item border border-blue-100 p-3 rounded-lg flex items-center bg-[#fff] justify-between shadow-sm';
              item.innerHTML = `
            <div class="flex items-center space-x-3 overflow-hidden">
              <div class="p-2 bg-primary-600 rounded text-white shrink-0">  <img  src="../assets/images/dashboard/icons/patient_DetailsIcons/file_icons.svg" class="w-5 h-5 brightness-0 invert" alt="file_icon"></div>
              <div class="truncate">
                <p class="text-xs font-medium text-primary-500 truncate">${file.name}</p>
                <p class="text-[10px] text-gray-400">${size} MB</p>
              </div>
            </div>
            <div class="text-primary-600"><img  src="../assets/images/dashboard/icons/patient_DetailsIcons/tick.png"  class="w-5 h-5" alt="file_icon" ></div>
          `;
              fileList.appendChild(item);
          });
      }
  });
}

function switchTab(el) {
  const buttons = document.querySelectorAll('.tab-btn');
  buttons.forEach(b => b.classList.remove('active'));
  el.classList.add('active');
}

function showTab(tabId) {
  document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.getElementById('content-' + tabId).classList.add('active');
  document.getElementById('btn-' + tabId).classList.add('active');
}

const activeSeries = { coding: true, denials: true, rejections: true };

function toggleLegend(key, element) {
  activeSeries[key] = !activeSeries[key];
  element.classList.toggle('inactive', !activeSeries[key]);
  drawDailyProgress(true);
}

function drawProduction() {
  const width = 340, height = 360;
  const container = d3.select("#production-chart");
  if (container.empty()) return;
  container.selectAll("*").remove();

  const svg = container.append("svg")
      .attr("viewBox", `0 0 ${width} ${height}`)
      .attr("width", "100%")
      .attr("height", "270px")
      .append("g")
      .attr("transform", `translate(${width/2}, ${height - 110})`);

  const innerRadius = 120;
  const outerRadius = 165;
  const startAngle = -Math.PI * 0.65;
  const endAngle = Math.PI * 0.65;
  const totalSpan = endAngle - startAngle;

  const arc = d3.arc()
      .innerRadius(innerRadius)
      .outerRadius(outerRadius)
      .startAngle(startAngle)
      .cornerRadius(10);

  svg.append("path")
      .datum({ endAngle: endAngle })
      .style("fill", "#f1f5f9")
      .attr("d", arc);

  const foreground = svg.append("path")
      .datum({ endAngle: startAngle })
      .style("fill", "#164e85")
      .attr("d", arc);

  foreground.transition().duration(1500).ease(d3.easeExpOut)
      .attrTween("d", function(d) {
          const interpolate = d3.interpolate(d.endAngle, startAngle + (totalSpan * 0.78));
          return function(t) { d.endAngle = interpolate(t); return arc(d); };
      });

  const textGroup = svg.append("g").attr("transform", "translate(0, -20)");
  textGroup.append("text").attr("text-anchor", "middle").attr("class", "target-number").text("120");
  textGroup.append("text").attr("text-anchor", "middle").attr("y", 50).attr("class", "target-subtext").style("fill", "#94a3b8").text("Total Target");
}

function drawErrorBreakdown() {
  const data = [4, 6, 9, 7, 10];
  const container = d3.select("#error-chart");
  if (container.empty()) return;
  container.selectAll("*").remove();
  
  const svg = container.append("svg").attr("width", "100%").attr("height", "100%").attr("viewBox", "0 0 200 95");
  const margin = { left: 20, bottom: 5 };
  const chartArea = svg.append("g").attr("transform", `translate(${margin.left}, 0)`);
  const innerWidth = 200 - margin.left;
  const chartHeight = 85;

  [0, 5, 10].forEach(tick => {
      svg.append("text").attr("x", 15).attr("y", chartHeight - (tick * 8) + 4)
          .attr("text-anchor", "end").attr("class", "axis-label").style("font-size", "8px").text(tick);
      chartArea.append("line").attr("x1", 0).attr("x2", innerWidth).attr("y1", chartHeight - (tick * 8)).attr("y2", chartHeight - (tick * 8))
          .attr("stroke", "#E2E2E2").attr("stroke-dasharray", "4,4");
  });

  const x = d3.scaleBand().range([0, innerWidth]).domain(d3.range(5)).padding(0.3);
  const y = d3.scaleLinear().range([chartHeight, 0]).domain([0, 10]);

  chartArea.selectAll("rect").data(data).enter().append("rect")
      .attr("x", (d, i) => x(i) + (x.bandwidth() - 25) / 2).attr("width", 25)
      .attr("y", chartHeight)
      .attr("height", 0)
      .attr("fill", "#fee2e2").attr("rx", 10)
      .transition()
      .delay((d, i) => i * 100)
      .duration(1000)
      .ease(d3.easeElasticOut.amplitude(1.1))
      .attrTween("y", function(d) {
          const interpolate = d3.interpolate(chartHeight, y(d));
          return function(t) {
              const val = interpolate(t);
              return isNaN(val) ? chartHeight : Math.min(chartHeight, val);
          };
      })
      .attrTween("height", function(d) {
          const targetHeight = chartHeight - y(d);
          const interpolate = d3.interpolate(0, targetHeight);
          return function(t) {
              const val = interpolate(t);
              return isNaN(val) ? 0 : Math.max(0, val);
          };
      });
}

function drawDailyProgress(isUpdate = false) {
  const rawData = [
      { day: "Mon", coding: 40, denials: 18, rejections: 25 },
      { day: "Tue", coding: 30, denials: 30, rejections: 35 },
      { day: "Wed", coding: 42, denials: 38, rejections: 25 },
      { day: "Thu", coding: 38, denials: 25, rejections: 25 },
      { day: "Fri", coding: 28, denials: 28, rejections: 48 },
      { day: "Sat", coding: 30, denials: 50, rejections: 25 },
  ];

  const dailyData = rawData.map(d => ({
      day: d.day,
      coding: activeSeries.coding ? d.coding : 0,
      denials: activeSeries.denials ? d.denials : 0,
      rejections: activeSeries.rejections ? d.rejections : 0
  }));

  const container = d3.select("#daily-chart");
  if (container.empty()) return;
  const width = container.node().clientWidth;
  const height = container.node().clientHeight;
  if (width === 0 || height === 0) return;
  
  container.selectAll("*").remove();
  const margin = { left: 40, top: 10, right: 10, bottom: 20 };
  const chartHeight = height - margin.top - margin.bottom;

  const svg = container.append("svg").attr("width", width).attr("height", height)
      .append("g").attr("transform", `translate(${margin.left}, ${margin.top})`);

  const stack = d3.stack().keys(['coding', 'denials', 'rejections']);
  const stackedData = stack(dailyData);
  const barWidth = 24;
  const step = (width - margin.left - margin.right) / rawData.length;
  const initialOffset = (step - barWidth) / 2;

  const y = d3.scaleLinear().range([chartHeight, 0]).domain([0, 120]);

  // Grid lines matrum ticks
  [0, 60, 120].forEach(tick => {
      svg.append("text").attr("x", -10).attr("y", y(tick) + 4).attr("text-anchor", "end").attr("class", "axis-label").style("font-size", "10px").text(tick);
      if (tick > 0) svg.append("line").attr("x1", 0).attr("x2", width - margin.left - margin.right).attr("y1", y(tick)).attr("y2", y(tick)).attr("class", "grid-line").attr("stroke-dasharray", "3,3");
  });

  // Vertical Left side line (Ippo add panniyachu)
  svg.append("line")
      .attr("x1", 0)
      .attr("y1", 0)
      .attr("x2", 0)
      .attr("y2", chartHeight)
      .attr("stroke", "#E2E2E2")
      .attr("stroke-width", 1);

  // Horizontal Bottom line
  svg.append("line")
      .attr("x1", 0)
      .attr("y1", chartHeight)
      .attr("x2", width - margin.left - margin.right)
      .attr("y2", chartHeight)
      .attr("stroke", "#E2E2E2")
      .attr("stroke-width", 1);

  const colors = ['#96B9E1', '#C1DBE3', '#FFDBE0'];
  stackedData.forEach((layer, layerIdx) => {
      const bars = svg.selectAll(`.layer-${layerIdx}`).data(layer).enter().append("path").attr("fill", colors[layerIdx]);

      bars.attr("d", (d, i) => {
              const x0 = initialOffset + (i * step), yBottom = chartHeight, yTop = chartHeight, w = barWidth;
              return `M${x0},${yBottom} L${x0},${yTop} L${x0 + w},${yTop} L${x0 + w},${yBottom} Z`;
          })
          .transition()
          .delay((d, i) => isUpdate ? 0 : i * 50)
          .duration(isUpdate ? 400 : 800)
          .attrTween("d", function(d, i) {
              const x0 = initialOffset + (i * step), w = barWidth, r = 6;
              const interpTop = d3.interpolate(chartHeight, y(d[1]));
              const interpBottom = d3.interpolate(chartHeight, y(d[0]));

              return function(t) {
                  let curTop = interpTop(t);
                  let curBottom = interpBottom(t);
                  
                  if (isNaN(curTop)) curTop = chartHeight;
                  if (isNaN(curBottom)) curBottom = chartHeight;
                  
                  const h = Math.max(0, curBottom - curTop);
                  if (h <= 0.01) return "";

                  const isTop = (layerIdx === 2 && activeSeries.rejections) ||
                      (layerIdx === 1 && !activeSeries.rejections && activeSeries.denials) ||
                      (layerIdx === 0 && !activeSeries.rejections && !activeSeries.denials && activeSeries.coding);

                  const radius = Math.min(r, h / 2);

                  return isTop ? `M${x0},${curBottom} L${x0},${curTop + radius} Q${x0},${curTop} ${x0 + radius},${curTop} L${x0 + w - radius},${curTop} Q${x0 + w},${curTop} ${x0 + w},${curTop + radius} L${x0 + w},${curBottom} Z` : `M${x0},${curBottom} L${x0},${curTop} L${x0 + w},${curTop} L${x0 + w},${curBottom} Z`;
              };
          });
  });

  rawData.forEach((d, i) => {
      svg.append("text").attr("x", initialOffset + (i * step) + barWidth / 2).attr("y", chartHeight + 15).attr("text-anchor", "middle").attr("class", "axis-label").style("font-size", "10px").text(d.day);
  });
}

window.onload = function() {
  drawProduction();
  drawErrorBreakdown();
  drawDailyProgress();
  
  // Animate Quality Fill bar
  setTimeout(() => {
      const fill = d3.select('#quality-fill');
      if (!fill.empty()) {
          fill.style('width', '0%')
              .transition()
              .duration(1200)
              .ease(d3.easeCubicOut)
              .style('width', '70%');
      }
  }, 600);
};

window.onresize = () => drawDailyProgress(true);

