const path = require('path');
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  entry: {
    'main': './src/index.js',
    'style': './src/index.scss',
  },
  mode: 'development',
  devtool: "hidden-source-map",
  output: {
    path: path.resolve(__dirname, "./dist/themes/iterra"),
    filename: "./js/[name].bundle.js",
    clean: {
      keep: /index.html/,
    }
  },
  devServer: {
    static: {
      directory: path.resolve(__dirname, "./dist/themes/iterra"),
    },
    open: true
  },
  module: {
    rules: [
      {
        test: /(\.s[ac]ss)$/,
        use: [
          // "style-loader", // creates style nodes from JS strings
          MiniCssExtractPlugin.loader,
          "css-loader", // translates CSS into CommonJS
          "postcss-loader",
          "sass-loader" // compiles Sass to CSS, using Node Sass by default
        ]
      },
      {
        test: /\.tsx?$/,
        use: "ts-loader",
        exclude: /node_modules/
      }
    ]
  },
  resolve: {
    extensions: [".tsx", ".ts", ".js"]
  },
  plugins: [
    new HtmlWebpackPlugin({ template: "./src/index.html" }),
    new MiniCssExtractPlugin({
      filename: '[name].css',
    })
  ]
};