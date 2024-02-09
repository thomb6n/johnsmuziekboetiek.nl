const path = require("path");
const globImporter = require('node-sass-glob-importer');

module.exports = {
  entry: "./source/javascript/index.js",
  mode: "development",
  output: {
    path: path.resolve(__dirname, "assets"),
    filename: "bundle.js",
  },
  module: {
    rules: [
      {
        test: /\.scss$/i,
        use: ["style-loader", "css-loader", {
					loader: 'sass-loader',
					options: {
						sassOptions: {
							importer: globImporter()
						}
					}
				}],
      },
    ],
  },
};
