const
RootURL = typeof window!='undefined' && location.host=='192.168.64.2' ? '/rgd3' : '/',
WpkPath = require('webpack-require-from'),
resolve = (p)=> require('path').resolve(__dirname, p)

module.exports = {
  publicPath: RootURL,
  
  filenameHashing: false,
  configureWebpack: {
    devtool: 'source-map',
    plugins: [
      new WpkPath({variableName: 'UiImportPath'})
    ],
    devServer: {
      host: '0.0.0.0',
      https: false,
      headers: {'Access-Control-Allow-Origin': '*'}
    },
    output: {
      filename: '[name].js',
      chunkFilename: '[name].js',
    },
    resolve: {
      alias: {
        $use: resolve('src/use'),
        $css: resolve('src/css'),
      }
    },
  },
  
  css: {sourceMap: true},
  
  lintOnSave: false,
};