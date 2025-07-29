async function fetchMainContainer() {
    const baseUrl = window.location.origin;
    const links = document.querySelectorAll('.menu ul li a');
    const results = [];
    
    const latestPostLink = links[links.length - 1];
    const latestPostURL = new URL(latestPostLink.href, baseUrl).href;
    console.log(latestPostURL);

    try {
        const response = await fetch(latestPostURL);
        if (!response.ok) throw new Error('HTTP error ' + response.status);

        const html = await response.text();
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const postLink = doc.querySelector('.name-text a')
        const postLinkURL = new URL(postLink.href, baseUrl).href;

        try {
            const response2 = await fetch(postLinkURL);
            if (!response2.ok) throw new Error('HTTP error during post fetch' + response2.status);

            const html2 = await response2.text();
            const doc2 = parser.parseFromString(html2, 'text/html');
            const container2 = doc2.querySelector('.container');

            if (container2) {
                const galleryWrapper = container2.querySelector('.gallery-wrapper')
                galleryWrapper.remove();

                results.push(container2.innerHTML.trim())
            }
        } catch (err) {
            console.error('Error while requesting:', latestPostURL, err);
            results.push('Error');
        }
    } catch (err) {
      console.error('Error while requesting:', latestPostURL, err);
      results.push('Error');
    }

    return results;
}

fetchMainContainer().then(results => {
    const container = document.querySelector('.container');
    if (container) {
        container.innerHTML = results[0];
    }
});