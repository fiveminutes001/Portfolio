document.addEventListener('DOMContentLoaded', function (e) {
	let elements = document.querySelectorAll('div[id]');
	let elementsArray = Array.from(elements);

	const fragment = document.createDocumentFragment();
	for (let i = 4; i < elementsArray.length; i++) {
		const newElement = document.createElement('div');
		newElement.className = 'insideHeaderDiv';
		fragment.appendChild(newElement);
		elementsArray[i].appendChild(fragment);
	}

	console.log('elements:', elements);
	console.log('e:', e);
});
