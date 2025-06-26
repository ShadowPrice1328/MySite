async function fetchParagraphsFromLinks() {
  const baseUrl = window.location.origin;
  const links = document.querySelectorAll('.name-text a');
  const results = [];

  for (const link of links) {
    const fullUrl = new URL(link.getAttribute('href'), baseUrl).href;

    try {
      const response = await fetch(fullUrl);
      if (!response.ok) throw new Error('HTTP error ' + response.status);

      const html = await response.text();
      const parser = new DOMParser();
      const doc = parser.parseFromString(html, 'text/html');

      const paragraph = doc.getElementById('main-description');

      if (paragraph) {
        results.push(paragraph.textContent.trim());

        const container = link.closest('.name-text');
        const mainDescElement = container?.nextElementSibling?.nextElementSibling;

        if (mainDescElement && mainDescElement.classList.contains('main-description')) {
          mainDescElement.textContent = paragraph.textContent.substring(0, 250) + "...";
        }
      } else {
        results.push('No description');
      }

    } catch (err) {
      console.error('Error while requesting:', fullUrl, err);
      results.push('Error');
    }
  }

  console.log('Results:', results);
}

fetchParagraphsFromLinks();
