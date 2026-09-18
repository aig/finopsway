(() => {
  const sections = [...document.querySelectorAll('.guide-section')];
  const markers = sections.map(section => section.querySelector('.step-number'));
  const content = document.querySelector('.guide-content');
  const header = document.querySelector('.masthead');
  let scheduled = false;

  function update() {
    scheduled = false;
    const stackTop = header.getBoundingClientRect().bottom + 24;
    const readingLine = Math.max(stackTop, Math.min(window.innerHeight * 0.3, 220));
    document.documentElement.style.setProperty('--guide-scroll-offset', `${stackTop}px`);
    const positions = sections.map(section => section.getBoundingClientRect().top);
    let current = 0;
    positions.forEach((top, index) => {
      if (top <= readingLine) current = index;
    });
    // Short final sections may never reach the reading line.
    if (window.scrollY > 0 && window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 2) {
      current = sections.length - 1;
    }
    const compact = window.matchMedia('(max-width: 720px)').matches;
    const stackGap = compact ? 46 : 64;
    const markerSize = compact ? 32 : 50;
    // Keep the collected steps inside the guide as the footer enters view.
    const stackHeight = (sections.length - 1) * stackGap + markerSize;
    const stackStart = Math.min(stackTop, content.getBoundingClientRect().bottom - stackHeight - 24);
    const naturalTops = markers.map((marker, index) =>
      positions[index] + sections[index].clientTop + marker.offsetTop);
    const stackBottom = window.innerHeight - 24 - markerSize;
    const markerTops = naturalTops.map((top, index) => {
      const upperSlot = stackStart + index * stackGap;
      const lowerSlot = stackBottom - (sections.length - 1 - index) * stackGap;
      return Math.max(upperSlot, Math.min(top, lowerSlot));
    });
    sections.forEach((section, index) => {
      const marker = markers[index];
      const shift = markerTops[index] - naturalTops[index];
      // Connect the visible marker centers, including when they collect into a stack.
      section.style.setProperty('--line-top', `${markerTops[index] - positions[index] - section.clientTop + markerSize / 2}px`);
      section.style.setProperty('--line-height', `${Math.max(0, (markerTops[index + 1] ?? markerTops[index]) - markerTops[index])}px`);
      marker.style.setProperty('--sticky-shift', `${shift}px`);
      marker.classList.toggle('is-collected', Math.abs(shift) > 0.5);
      section.classList.toggle('is-active', index === current);
      section.classList.toggle('is-complete', index < current);
      if (index === current) marker.setAttribute('aria-current', 'step');
      else marker.removeAttribute('aria-current');
      const distance = positions[index + 1] - positions[index];
      const progress = index < current ? 1 : index === current && distance > 0
        ? Math.max(0, Math.min(1, (readingLine - positions[index]) / distance)) : 0;
      section.style.setProperty('--step-progress', progress);
    });
  }
  function scheduleUpdate() {
    if (!scheduled) {
      scheduled = true;
      requestAnimationFrame(update);
    }
  }
  window.addEventListener('scroll', scheduleUpdate, { passive: true });
  window.addEventListener('resize', scheduleUpdate);
  window.addEventListener('pageshow', scheduleUpdate);
  const resizeObserver = new ResizeObserver(scheduleUpdate);
  resizeObserver.observe(content);
  resizeObserver.observe(header);
  update();
})();
