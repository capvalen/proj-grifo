<?php
// Leer todo el archivo como string
$contenido = file_get_contents('impresion.txt');
echo "<pre>" . $contenido . "</pre>";

?>

<script>
	document.oncontextmenu = function() {
		return false;
	};
	document.addEventListener('keydown', function(e) {
		// Bloquear Ctrl+S, Ctrl+P, Ctrl+U
		if ((e.ctrlKey || e.metaKey) && ['s', 'u'].includes(e.key.toLowerCase())) {
			e.preventDefault();
			return false;
		}

		// Bloquear F12 (herramientas de desarrollo) - funciona en algunos navegadores
		if (e.key === 'F12') {
			e.preventDefault();
			return false;
		}

	});
</script>

<style>
	pre {
		font-size: 16px;
		transition: font-size 0.2s;
	}

	* {
		-webkit-user-select: none;
		/* Chrome, Safari, Opera */
		-moz-user-select: none;
		/* Firefox */
		-ms-user-select: none;
		/* Internet Explorer/Edge */
		user-select: none;
		/* Non-prefixed version */
	}
</style>