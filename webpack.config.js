const webpack = require('webpack');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

const extractSass = new ExtractTextPlugin({
	filename: '../css/app.css',
	allChunks:true
});

module.exports = {
	entry:__dirname+'/resources/src/js/app.js',
	output:{
			filename:'app.js',
			path:__dirname + '/public/js',
	},
	devServer: {
		port: 7000,
		compress: true,
		hot: true,
	},
	plugins:[
		extractSass
	],
	module:{
		rules:[
			{
				test:/\.sass$/,
				use: extractSass.extract(
					{
						use:['css-loader', 'sass-loader'],
						fallback:"style-loader"
					}
				)
			}
		]
	}
}