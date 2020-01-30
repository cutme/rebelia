const path = require('path');
const loaders = require('./loaders');
const plugins = require('./plugins');

const HtmlWebpackPlugin = require('html-webpack-plugin');
const ProgressBarPlugin = require('progress-bar-webpack-plugin');
const webpack = require('webpack');

const minify = {
    collapseWhitespace: true,
    removeComments: true,
    minifyJS: true,
    minifyURLs: true,
    removeEmptyAttributes: true,
    removeScriptTypeAttributes: true,
}



const templateFileMapper = [

    { template: "./src/about.ejs", file: "about.html" },
    { template: "./src/contact.ejs", file: "contact.html" },
    { template: "./src/index.ejs", file: "index.html" },
    { template: "./src/jobs.ejs", file: "jobs.html" },
    { template: "./src/join.ejs", file: "join.html" },
    { template: "./src/junk-yard.ejs", file: "junk-yard.html" },
    { template: "./src/news.ejs", file: "news.html" },
    { template: "./src/news-single.ejs", file: "news-single.html" },
    { template: "./src/press.ejs", file: "press.html" }

]


const htmlPlugins = () => {
  return templateFileMapper.map(entry => {
    return new HtmlWebpackPlugin({
      template: entry.template,
      filename: entry.file,
    });
  })
};

                    
module.exports = {
    mode: 'development',

    entry: {
        app: "./src/app.js"
    },
    
    devServer: {
        contentBase: './dist',
        hot: true
    },

    output: {
        path: path.resolve(__dirname, './dist'),
        filename: "js/[name].bundle.js",
        publicPath: ''
    },

    module: {
    	rules: [
    	    loaders.css,
    		loaders.scss,
            loaders.fonts,
            loaders.images,
            loaders.js,
            loaders.ejs
		]
    },

   

    plugins: htmlPlugins().concat([
        new ProgressBarPlugin(),
        new webpack.ProvidePlugin({
            _: "underscore"
        }),

        plugins.MiniCssExtractPlugin,        
        plugins.css,
        plugins.js,
        plugins.HotModuleReplacementPlugin
    ]),
	
    optimization: {
        namedModules: true, // NamedModulesPlugin()
        /*
splitChunks: { // CommonsChunkPlugin()
            name: 'commons',
            minChunks: 2
        },
        noEmitOnErrors: true, // NoEmitOnErrorsPlugin
        concatenateModules: true //ModuleConcatenationPlugin
*/
    }
};



