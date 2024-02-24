<html>
<head>
</head>
<body>
<!-- untuk masukkan html dan css
############################################################################################### -->
	<div id="akar"></div>

<!-- untuk masukkan javascript
############################################################################################### -->
<!-- untuk sumber react -->
<script src="https://unpkg.com/react@18/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
<!-- untuk sumber jsx -->
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<script type="text/jsx">
const container = document.getElementById('akar');
const akar = ReactDOM.createRoot(container);
akar.render(
	<>
	<h1 className="heading">Belajar React</h1>
	<p onClick={e => {alert('ok!')}}>Belajar React itu mudah dan menyenangkan bukan?!</p>
	</>
);
</script>
</body>
</html>