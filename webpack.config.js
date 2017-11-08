const webpack = require('webpack');

module.exports = {
	entry:__dirname + '/resources/src/js/app.js',
	output:{
			filename:'app.js',
			path:__dirname + '/public/js'
	},
	devServer: {
		port: 7000,
		compress: true,
		hot: true,
	},
	plugins:[
		new webpack.NamedModulesPlugin(),
		new webpack.HotModuleReplacementPlugin()
	]
}