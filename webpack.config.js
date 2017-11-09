const webpack = require('webpack');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

const extractSass = new ExtractTextPlugin({
	filename:  (getPath) => {
		return getPath('css/app.css').replace('css/js', 'css');
	},
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
		new webpack.NamedModulesPlugin(),
		new webpack.HotModuleReplacementPlugin(),
		extractSass
	],
	module:{
		rules:[
			{
				test:/\.sass$/,
				use: extractSass.extract(
					{
						use:
						[
							{
								loader:"css-loader"
							},
							{
								loader:"sass-loader"
							}
						],
						fallback:"style-loader"
					}
				)
			}
		]
	}
}