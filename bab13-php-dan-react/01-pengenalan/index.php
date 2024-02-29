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
<!-- untuk sumber jsx.  Don't use this in production: -->
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
<!-- ##############################################################################################
Note: this page is a great way to try React but it's not suitable for production.
It slowly compiles JSX with Babel in the browser and uses a large development build of React.

Read this page for starting a new React project with JSX:
https://react.dev/learn/start-a-new-react-project

Read this page for adding React with JSX to an existing project:
https://react.dev/learn/add-react-to-an-existing-project
############################################################################################### -->
</body>
</html>