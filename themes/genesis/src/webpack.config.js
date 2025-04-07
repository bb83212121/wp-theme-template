const path = require('path');
const webpack = require('webpack');

module.exports = {
  entry: './js/index.js', // Entry file
  output: {
    filename: 'index.js', // Output file name
    path: path.resolve(__dirname, './../assets/js'),
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
        },
      },
    ],
  },
  plugins: [
    new webpack.ProvidePlugin({
      gsap: 'gsap',
      $: 'jquery',
      jQuery: 'jquery',
    })
  ],
  mode: 'production', // Use 'development' for local dev
};
