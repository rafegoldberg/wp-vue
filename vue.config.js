const
RootURL = '/',
ProdEnv = process.env.NODE_ENV === 'production',
WpkPath = require('webpack-require-from'),
resolve = (p)=> require('path').resolve(__dirname, p)

module.exports = {
  publicPath: RootURL,
  assetsDir: ProdEnv ? '/rgd3/wp-content/themes/wp-vue/dist/' : '.',

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
  
  css: {
    sourceMap: true,
    extract: false,
  },
  
  lintOnSave: false,
};