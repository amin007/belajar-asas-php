<html>
<head>
</head>
<body>
<!-- untuk masukkan html dan css
############################################################################################### -->
	<div id="App"></div>

<!-- untuk masukkan javascript
############################################################################################### -->
<!-- untuk sumber react -->
<script src="https://unpkg.com/react@18/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
<!-- untuk sumber jsx.  Don't use this in production: -->
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<script type="text/jsx">
import React from 'react';
import {View, Text, Image, ScrollView, TextInput} from 'react-native';

const App = () => {
return (
<ScrollView>
	<Text>Some text</Text>
	<View>
		<Text>Some more text</Text>
		<Image
			source={{
				uri: 'https://reactnative.dev/docs/assets/p_cat2.png',
			}}
			style={{width: 200, height: 200}}
		/>
	</View>
	<TextInput
		style={{
			height: 40,
			borderColor: 'gray',
		borderWidth: 1,
		}}
		defaultValue="You can type in me"
	/>
</ScrollView>
);
};

export default App;
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