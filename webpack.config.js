const path = require('path');
const miniCssExtractPlugin = require('mini-css-extract-plugin');
const styleLintPlugin = require('stylelint-webpack-plugin');
const copyWebpackPlugin = require('copy-webpack-plugin');
const FriendlyErrorsWebpackPlugin = require('friendly-errors-webpack-plugin');

module.exports = {
  context: path.resolve(__dirname, 'src'),
  stats: 'none',
  entry: {
    main: [
      './scripts/main.js',
    ],
  },
  output: {
    path: path.resolve('./app/dist'),
    filename: '[name].js',
    pathinfo: false,
  },
  resolve: {
    modules: [
      'src',
      'node_modules',
    ],
  },
  module: {
    rules: [
      {
        enforce: 'pre',
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'eslint-loader',
        options: {
          failOnError: true,
        },
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader?cacheDirectory',
        },
      },
      {
        test: /\.scss$/,
        use: [
          miniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'postcss-loader',
            options: {
                config: {
                    path: path.resolve(__dirname, 'postcss.config.js'),
                },
            },
          },
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new styleLintPlugin({
      configFile: '.stylelintrc',
      context: 'src/styles',
      files: '**/*.scss',
      failOnError: false,
      quiet: false,
    }),
    new miniCssExtractPlugin({
      filename: '[name].css',
      chunkFilename: '[name].css',
    }),
    new copyWebpackPlugin([
      {
        from: 'images',
        to: 'images/[name].[ext]',
      },
    ]),
    new copyWebpackPlugin([
      {
        from: 'svgs',
        to: 'svgs/[name].[ext]',
      },
    ]),
    new FriendlyErrorsWebpackPlugin(),
  ],
};