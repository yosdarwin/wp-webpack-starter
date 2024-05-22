const webpackConfig = require("./webpack.config");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const { merge } = require("webpack-merge");

module.exports = merge(webpackConfig, {
    mode: "production",
    optimization: {
        minimizer: [`...`, new CssMinimizerPlugin(), new TerserPlugin()],
    },
});
