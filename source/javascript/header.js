document.addEventListener('DOMContentLoaded', () => {
	handleMenuToggle();
});

const handleMenuToggle = () => {
	const siteHeader = document.getElementById('site-header');
	const menuToggleButton = document.getElementById('menu-toggle');
	const menus = document.getElementById('menus');
	const primaryMenu = document.getElementById('primary-menu');
	const secondaryMenu = document.getElementById('secondary-menu');

	menuToggleButton.addEventListener('click', (e) => {
		document.body.classList.toggle('menu-open');
		menus.classList.toggle('menu-open');

		if (menuToggleButton.dataset.toggle === 'closed') {
			menuToggleButton.dataset.toggle = 'open';
			primaryMenu.setAttribute('aria-expanded', 'true');
			secondaryMenu.setAttribute('aria-expanded', 'true');
		} else {
			menuToggleButton.dataset.toggle = 'closed';
			primaryMenu.setAttribute('aria-expanded', 'false');
			secondaryMenu.setAttribute('aria-expanded', 'false');
		}
	});

	const submenuParents = document.querySelectorAll('.menu-item-has-children');
	submenuParents.forEach((parent) => {
		const subMenuToggles = parent.querySelector('.submenu-toggle');
		subMenuToggles.addEventListener('click', (e) => {
			e.preventDefault();
			const submenu = parent.querySelector('.submenu');
			const expanded = submenu.getAttribute('aria-expanded') === 'true' ? 'false' : 'true';
			submenu.setAttribute('aria-expanded', expanded);
			submenu.classList.toggle('is-open');
		});
	});
};
