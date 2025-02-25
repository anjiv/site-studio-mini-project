<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* __string_template__907f7f3b7c2fc7e121a02e7770bc0e30 */
class __TwigTemplate_fca46e7b611316a0046b01dfede8cdfb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield ":root {
  --ssa-color-palette-black: rgb(0, 0, 0);
  --ssa-color-palette-brand-color: rgb(38, 163, 221);
  --ssa-color-palette-brand-color-dark: rgb(26, 137, 201);
  --ssa-color-palette-brand-color-light: rgb(112, 195, 233);
  --ssa-color-palette-bright-orange: rgb(252, 159, 67);
  --ssa-color-palette-caramel: rgb(255, 209, 156);
  --ssa-color-palette-gray-10: rgb(242, 242, 242);
  --ssa-color-palette-gray-20: rgb(219, 219, 220);
  --ssa-color-palette-gray-30: rgb(191, 191, 191);
  --ssa-color-palette-gray-70: rgb(72, 72, 72);
  --ssa-color-palette-gray-80: rgb(50, 50, 50);
  --ssa-color-palette-gray-90: rgb(34, 34, 34);
  --ssa-color-palette-green: rgb(230, 240, 231);
  --ssa-color-palette-white: rgb(255, 255, 255);
}
.coh-color-black {
  color: rgb(0, 0, 0);
}
.coh-color-brand-color {
  color: rgb(38, 163, 221);
}
.coh-color-brand-color-dark {
  color: rgb(26, 137, 201);
}
.coh-color-brand-color-light {
  color: rgb(112, 195, 233);
}
.coh-color-bright-orange {
  color: rgb(252, 159, 67);
}
.coh-color-gray-10 {
  color: rgb(242, 242, 242);
}
.coh-color-gray-20 {
  color: rgb(219, 219, 220);
}
.coh-color-gray-30 {
  color: rgb(191, 191, 191);
}
.coh-color-gray-70 {
  color: rgb(72, 72, 72);
}
.coh-color-gray-80 {
  color: rgb(50, 50, 50);
}
.coh-color-gray-90 {
  color: rgb(34, 34, 34);
}
.coh-color-green {
  color: rgb(230, 240, 231);
}
.coh-color-white {
  color: rgb(255, 255, 255);
}
[data-icon-icomoon] {
  font-family: \"icomoon\", serif;
}
[data-icon-icomoon]:after {
  font-family: \"icomoon\", serif;
  content: attr(data-icon-icomoon);
}
@font-face {
  font-family: \"icomoon\";
  src: url(\"/sites/default/files/cohesion/icomoon.eot\");
  src: url(\"/sites/default/files/cohesion/icomoon.eot?#iefix\") format(\"embedded-opentype\"), url(\"/sites/default/files/cohesion/icomoon.woff2\") format(\"woff2\"), url(\"/sites/default/files/cohesion/icomoon.woff\") format(\"woff\"), url(\"/sites/default/files/cohesion/icomoon.ttf\") format(\"truetype\");
}
:root {
  --ssa-font-stacks-arial: Arial, 'Helvetica Neue', Helvetica, sans-serif;
  --ssa-font-stacks-montserrat: 'Montserrat', sans-serif;
  --ssa-font-stacks-roboto: 'Roboto', sans-serif;
}
:root {
  --ssa-responsive-grid-settings-width: 20rem;
  --ssa-responsive-grid-settings-boxed-width: 17.5rem;
  --ssa-responsive-grid-settings-inner-gutter: 1.25rem;
  --ssa-responsive-grid-settings-outer-gutter: 1.25rem;
}
@media (min-width: 565px) {
  :root {
    --ssa-responsive-grid-settings-width: 35.3125rem;
    --ssa-responsive-grid-settings-boxed-width: 31.5625rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.875rem;
    --ssa-responsive-grid-settings-outer-gutter: 1.875rem;
  }
}
@media (min-width: 768px) {
  :root {
    --ssa-responsive-grid-settings-width: 48rem;
    --ssa-responsive-grid-settings-boxed-width: 44.875rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.875rem;
    --ssa-responsive-grid-settings-outer-gutter: 1.5625rem;
  }
}
@media (min-width: 1024px) {
  :root {
    --ssa-responsive-grid-settings-width: 64rem;
    --ssa-responsive-grid-settings-boxed-width: 53.375rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.4375rem;
    --ssa-responsive-grid-settings-outer-gutter: 5.3125rem;
  }
}
@media (min-width: 1170px) {
  :root {
    --ssa-responsive-grid-settings-width: 73.125rem;
    --ssa-responsive-grid-settings-boxed-width: 53.125rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.4375rem;
    --ssa-responsive-grid-settings-outer-gutter: 10rem;
  }
}
@media (min-width: 1400px) {
  :root {
    --ssa-responsive-grid-settings-width: 87.5rem;
    --ssa-responsive-grid-settings-boxed-width: 53.125rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.4375rem;
    --ssa-responsive-grid-settings-outer-gutter: 17.1875rem;
  }
}
.coh-row-inner {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  margin-left: -0.625rem;
  margin-right: -0.625rem;
}
@media (min-width: 565px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.9375rem;
    margin-right: -0.9375rem;
  }
}
@media (min-width: 768px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.9375rem;
    margin-right: -0.9375rem;
  }
}
@media (min-width: 1024px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.71875rem;
    margin-right: -0.71875rem;
  }
}
@media (min-width: 1170px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.71875rem;
    margin-right: -0.71875rem;
  }
}
@media (min-width: 1400px) {
  .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.71875rem;
    margin-right: -0.71875rem;
  }
}
.coh-column {
  position: relative;
  width: 100%;
  min-height: 1px;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.coh-column {
  padding-left: 0.625rem;
  padding-right: 0.625rem;
}
@media (min-width: 565px) {
  .coh-column {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }
}
@media (min-width: 768px) {
  .coh-column {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }
}
@media (min-width: 1024px) {
  .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1170px) {
  .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1400px) {
  .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
.coh-col-xs {
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  max-width: 100%;
}
.coh-layout-col-xs {
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  max-width: 100%;
  opacity: 1;
}
.coh-col-xs-auto {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 auto;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
  max-width: none;
}
.coh-layout-col-xs-auto {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 auto;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
  max-width: 200px;
  opacity: 1;
}
.coh-layout-col-xs-hidden {
  max-width: 200px;
  opacity: 0.5;
}
.coh-col-xs-1 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 8.3333333333%;
      -ms-flex: 0 0 8.3333333333%;
          flex: 0 0 8.3333333333%;
  max-width: 8.3333333333%;
}
.coh-layout-col-xs-1 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
      -ms-flex: 0 0 calc(8.3333333333% - 10px);
          flex: 0 0 calc(8.3333333333% - 10px);
  max-width: -webkit-calc(8.3333333333% - 10px);
  max-width: calc(8.3333333333% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-1.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 8.3333333333%;
      -ms-flex: 0 0 8.3333333333%;
          flex: 0 0 8.3333333333%;
  max-width: 8.3333333333%;
}
.coh-col-xs-2 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 16.6666666667%;
      -ms-flex: 0 0 16.6666666667%;
          flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}
.coh-layout-col-xs-2 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
      -ms-flex: 0 0 calc(16.6666666667% - 10px);
          flex: 0 0 calc(16.6666666667% - 10px);
  max-width: -webkit-calc(16.6666666667% - 10px);
  max-width: calc(16.6666666667% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-2.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 16.6666666667%;
      -ms-flex: 0 0 16.6666666667%;
          flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}
.coh-col-xs-3 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 25%;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%;
}
.coh-layout-col-xs-3 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(25% - 10px);
      -ms-flex: 0 0 calc(25% - 10px);
          flex: 0 0 calc(25% - 10px);
  max-width: -webkit-calc(25% - 10px);
  max-width: calc(25% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-3.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 25%;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%;
}
.coh-col-xs-4 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 33.3333333333%;
      -ms-flex: 0 0 33.3333333333%;
          flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}
.coh-layout-col-xs-4 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
      -ms-flex: 0 0 calc(33.3333333333% - 10px);
          flex: 0 0 calc(33.3333333333% - 10px);
  max-width: -webkit-calc(33.3333333333% - 10px);
  max-width: calc(33.3333333333% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-4.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 33.3333333333%;
      -ms-flex: 0 0 33.3333333333%;
          flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}
.coh-col-xs-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 41.6666666667%;
      -ms-flex: 0 0 41.6666666667%;
          flex: 0 0 41.6666666667%;
  max-width: 41.6666666667%;
}
.coh-layout-col-xs-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
      -ms-flex: 0 0 calc(41.6666666667% - 10px);
          flex: 0 0 calc(41.6666666667% - 10px);
  max-width: -webkit-calc(41.6666666667% - 10px);
  max-width: calc(41.6666666667% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-5.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 41.6666666667%;
      -ms-flex: 0 0 41.6666666667%;
          flex: 0 0 41.6666666667%;
  max-width: 41.6666666667%;
}
.coh-col-xs-6 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 50%;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.coh-layout-col-xs-6 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(50% - 10px);
      -ms-flex: 0 0 calc(50% - 10px);
          flex: 0 0 calc(50% - 10px);
  max-width: -webkit-calc(50% - 10px);
  max-width: calc(50% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-6.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 50%;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.coh-col-xs-7 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 58.3333333333%;
      -ms-flex: 0 0 58.3333333333%;
          flex: 0 0 58.3333333333%;
  max-width: 58.3333333333%;
}
.coh-layout-col-xs-7 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
      -ms-flex: 0 0 calc(58.3333333333% - 10px);
          flex: 0 0 calc(58.3333333333% - 10px);
  max-width: -webkit-calc(58.3333333333% - 10px);
  max-width: calc(58.3333333333% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-7.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 58.3333333333%;
      -ms-flex: 0 0 58.3333333333%;
          flex: 0 0 58.3333333333%;
  max-width: 58.3333333333%;
}
.coh-col-xs-8 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 66.6666666667%;
      -ms-flex: 0 0 66.6666666667%;
          flex: 0 0 66.6666666667%;
  max-width: 66.6666666667%;
}
.coh-layout-col-xs-8 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
      -ms-flex: 0 0 calc(66.6666666667% - 10px);
          flex: 0 0 calc(66.6666666667% - 10px);
  max-width: -webkit-calc(66.6666666667% - 10px);
  max-width: calc(66.6666666667% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-8.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 66.6666666667%;
      -ms-flex: 0 0 66.6666666667%;
          flex: 0 0 66.6666666667%;
  max-width: 66.6666666667%;
}
.coh-col-xs-9 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 75%;
      -ms-flex: 0 0 75%;
          flex: 0 0 75%;
  max-width: 75%;
}
.coh-layout-col-xs-9 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(75% - 10px);
      -ms-flex: 0 0 calc(75% - 10px);
          flex: 0 0 calc(75% - 10px);
  max-width: -webkit-calc(75% - 10px);
  max-width: calc(75% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-9.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 75%;
      -ms-flex: 0 0 75%;
          flex: 0 0 75%;
  max-width: 75%;
}
.coh-col-xs-10 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 83.3333333333%;
      -ms-flex: 0 0 83.3333333333%;
          flex: 0 0 83.3333333333%;
  max-width: 83.3333333333%;
}
.coh-layout-col-xs-10 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
      -ms-flex: 0 0 calc(83.3333333333% - 10px);
          flex: 0 0 calc(83.3333333333% - 10px);
  max-width: -webkit-calc(83.3333333333% - 10px);
  max-width: calc(83.3333333333% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-10.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 83.3333333333%;
      -ms-flex: 0 0 83.3333333333%;
          flex: 0 0 83.3333333333%;
  max-width: 83.3333333333%;
}
.coh-col-xs-11 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 91.6666666667%;
      -ms-flex: 0 0 91.6666666667%;
          flex: 0 0 91.6666666667%;
  max-width: 91.6666666667%;
}
.coh-layout-col-xs-11 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
      -ms-flex: 0 0 calc(91.6666666667% - 10px);
          flex: 0 0 calc(91.6666666667% - 10px);
  max-width: -webkit-calc(91.6666666667% - 10px);
  max-width: calc(91.6666666667% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-11.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 91.6666666667%;
      -ms-flex: 0 0 91.6666666667%;
          flex: 0 0 91.6666666667%;
  max-width: 91.6666666667%;
}
.coh-col-xs-12 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}
.coh-layout-col-xs-12 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(100% - 10px);
      -ms-flex: 0 0 calc(100% - 10px);
          flex: 0 0 calc(100% - 10px);
  max-width: -webkit-calc(100% - 10px);
  max-width: calc(100% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-12.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}
.coh-col-xs-1-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 20%;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  max-width: 20%;
}
.coh-layout-col-xs-1-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(20% - 10px);
      -ms-flex: 0 0 calc(20% - 10px);
          flex: 0 0 calc(20% - 10px);
  max-width: -webkit-calc(20% - 10px);
  max-width: calc(20% - 10px);
  opacity: 1;
}
.coh-layout-col-xs-1-5.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 20%;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  max-width: 20%;
}
.coh-col-xs-push-12 {
  left: 100%;
}
.coh-col-xs-pull-12 {
  right: 100%;
}
.coh-col-xs-offset-12 {
  margin-left: 100%;
}
.coh-col-xs-push-11 {
  left: 91.6666666667%;
}
.coh-col-xs-pull-11 {
  right: 91.6666666667%;
}
.coh-col-xs-offset-11 {
  margin-left: 91.6666666667%;
}
.coh-col-xs-push-10 {
  left: 83.3333333333%;
}
.coh-col-xs-pull-10 {
  right: 83.3333333333%;
}
.coh-col-xs-offset-10 {
  margin-left: 83.3333333333%;
}
.coh-col-xs-push-9 {
  left: 75%;
}
.coh-col-xs-pull-9 {
  right: 75%;
}
.coh-col-xs-offset-9 {
  margin-left: 75%;
}
.coh-col-xs-push-8 {
  left: 66.6666666667%;
}
.coh-col-xs-pull-8 {
  right: 66.6666666667%;
}
.coh-col-xs-offset-8 {
  margin-left: 66.6666666667%;
}
.coh-col-xs-push-7 {
  left: 58.3333333333%;
}
.coh-col-xs-pull-7 {
  right: 58.3333333333%;
}
.coh-col-xs-offset-7 {
  margin-left: 58.3333333333%;
}
.coh-col-xs-push-6 {
  left: 50%;
}
.coh-col-xs-pull-6 {
  right: 50%;
}
.coh-col-xs-offset-6 {
  margin-left: 50%;
}
.coh-col-xs-push-5 {
  left: 41.6666666667%;
}
.coh-col-xs-pull-5 {
  right: 41.6666666667%;
}
.coh-col-xs-offset-5 {
  margin-left: 41.6666666667%;
}
.coh-col-xs-push-4 {
  left: 33.3333333333%;
}
.coh-col-xs-pull-4 {
  right: 33.3333333333%;
}
.coh-col-xs-offset-4 {
  margin-left: 33.3333333333%;
}
.coh-col-xs-push-3 {
  left: 25%;
}
.coh-col-xs-pull-3 {
  right: 25%;
}
.coh-col-xs-offset-3 {
  margin-left: 25%;
}
.coh-col-xs-push-2 {
  left: 16.6666666667%;
}
.coh-col-xs-pull-2 {
  right: 16.6666666667%;
}
.coh-col-xs-offset-2 {
  margin-left: 16.6666666667%;
}
.coh-visible-xs {
  display: block;
}
.coh-col-xs-push-1 {
  left: 8.3333333333%;
}
.coh-col-xs-pull-1 {
  right: 8.3333333333%;
}
.coh-col-xs-offset-1 {
  margin-left: 8.3333333333%;
}
.coh-hidden-xs {
  display: none;
}
.coh-col-xs-push-0 {
  left: auto;
}
.coh-col-xs-pull-0 {
  right: auto;
}
.coh-col-xs-offset-0 {
  margin-left: 0;
}
.coh-col-xs-push-1-5 {
  left: 20%;
}
.coh-col-xs-pull-1-5 {
  right: 20%;
}
.coh-col-xs-offset-1-5 {
  margin-left: 20%;
}
@media (min-width: 565px) {
  .coh-col-ps {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-ps {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-ps-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-ps-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-ps-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-ps-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-ps-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-ps-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-ps-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-ps-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-ps-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-ps-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-ps-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-ps-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-ps-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-ps-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-ps-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-ps-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-ps-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-ps-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-ps-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-ps-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-ps-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-ps-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-ps-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-ps-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-ps-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-ps-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-ps-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-ps-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-ps-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-ps-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-ps-push-12 {
    left: 100%;
  }
  .coh-col-ps-pull-12 {
    right: 100%;
  }
  .coh-col-ps-offset-12 {
    margin-left: 100%;
  }
  .coh-col-ps-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-ps-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-ps-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-ps-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-ps-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-ps-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-ps-push-9 {
    left: 75%;
  }
  .coh-col-ps-pull-9 {
    right: 75%;
  }
  .coh-col-ps-offset-9 {
    margin-left: 75%;
  }
  .coh-col-ps-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-ps-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-ps-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-ps-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-ps-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-ps-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-ps-push-6 {
    left: 50%;
  }
  .coh-col-ps-pull-6 {
    right: 50%;
  }
  .coh-col-ps-offset-6 {
    margin-left: 50%;
  }
  .coh-col-ps-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-ps-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-ps-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-ps-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-ps-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-ps-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-ps-push-3 {
    left: 25%;
  }
  .coh-col-ps-pull-3 {
    right: 25%;
  }
  .coh-col-ps-offset-3 {
    margin-left: 25%;
  }
  .coh-col-ps-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-ps-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-ps-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-ps {
    display: block;
  }
  .coh-col-ps-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-ps-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-ps-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-ps {
    display: none;
  }
  .coh-col-ps-push-0 {
    left: auto;
  }
  .coh-col-ps-pull-0 {
    right: auto;
  }
  .coh-col-ps-offset-0 {
    margin-left: 0;
  }
  .coh-col-ps-push-1-5 {
    left: 20%;
  }
  .coh-col-ps-pull-1-5 {
    right: 20%;
  }
  .coh-col-ps-offset-1-5 {
    margin-left: 20%;
  }
}
@media (min-width: 768px) {
  .coh-col-sm {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-sm {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-sm-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-sm-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-sm-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-sm-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-sm-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-sm-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-sm-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-sm-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-sm-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-sm-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-sm-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-sm-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-sm-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-sm-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-sm-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-sm-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-sm-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-sm-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-sm-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-sm-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-sm-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-sm-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-sm-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-sm-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-sm-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-sm-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-sm-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-sm-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-sm-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-sm-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-sm-push-12 {
    left: 100%;
  }
  .coh-col-sm-pull-12 {
    right: 100%;
  }
  .coh-col-sm-offset-12 {
    margin-left: 100%;
  }
  .coh-col-sm-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-sm-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-sm-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-sm-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-sm-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-sm-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-sm-push-9 {
    left: 75%;
  }
  .coh-col-sm-pull-9 {
    right: 75%;
  }
  .coh-col-sm-offset-9 {
    margin-left: 75%;
  }
  .coh-col-sm-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-sm-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-sm-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-sm-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-sm-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-sm-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-sm-push-6 {
    left: 50%;
  }
  .coh-col-sm-pull-6 {
    right: 50%;
  }
  .coh-col-sm-offset-6 {
    margin-left: 50%;
  }
  .coh-col-sm-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-sm-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-sm-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-sm-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-sm-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-sm-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-sm-push-3 {
    left: 25%;
  }
  .coh-col-sm-pull-3 {
    right: 25%;
  }
  .coh-col-sm-offset-3 {
    margin-left: 25%;
  }
  .coh-col-sm-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-sm-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-sm-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-sm {
    display: block;
  }
  .coh-col-sm-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-sm-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-sm-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-sm {
    display: none;
  }
  .coh-col-sm-push-0 {
    left: auto;
  }
  .coh-col-sm-pull-0 {
    right: auto;
  }
  .coh-col-sm-offset-0 {
    margin-left: 0;
  }
  .coh-col-sm-push-1-5 {
    left: 20%;
  }
  .coh-col-sm-pull-1-5 {
    right: 20%;
  }
  .coh-col-sm-offset-1-5 {
    margin-left: 20%;
  }
}
@media (min-width: 1024px) {
  .coh-col-md {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-md {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-md-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-md-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-md-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-md-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-md-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-md-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-md-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-md-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-md-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-md-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-md-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-md-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-md-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-md-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-md-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-md-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-md-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-md-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-md-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-md-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-md-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-md-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-md-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-md-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-md-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-md-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-md-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-md-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-md-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-md-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-md-push-12 {
    left: 100%;
  }
  .coh-col-md-pull-12 {
    right: 100%;
  }
  .coh-col-md-offset-12 {
    margin-left: 100%;
  }
  .coh-col-md-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-md-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-md-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-md-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-md-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-md-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-md-push-9 {
    left: 75%;
  }
  .coh-col-md-pull-9 {
    right: 75%;
  }
  .coh-col-md-offset-9 {
    margin-left: 75%;
  }
  .coh-col-md-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-md-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-md-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-md-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-md-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-md-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-md-push-6 {
    left: 50%;
  }
  .coh-col-md-pull-6 {
    right: 50%;
  }
  .coh-col-md-offset-6 {
    margin-left: 50%;
  }
  .coh-col-md-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-md-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-md-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-md-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-md-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-md-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-md-push-3 {
    left: 25%;
  }
  .coh-col-md-pull-3 {
    right: 25%;
  }
  .coh-col-md-offset-3 {
    margin-left: 25%;
  }
  .coh-col-md-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-md-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-md-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-md {
    display: block;
  }
  .coh-col-md-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-md-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-md-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-md {
    display: none;
  }
  .coh-col-md-push-0 {
    left: auto;
  }
  .coh-col-md-pull-0 {
    right: auto;
  }
  .coh-col-md-offset-0 {
    margin-left: 0;
  }
  .coh-col-md-push-1-5 {
    left: 20%;
  }
  .coh-col-md-pull-1-5 {
    right: 20%;
  }
  .coh-col-md-offset-1-5 {
    margin-left: 20%;
  }
}
@media (min-width: 1170px) {
  .coh-col-lg {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-lg {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-lg-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-lg-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-lg-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-lg-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-lg-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-lg-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-lg-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-lg-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-lg-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-lg-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-lg-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-lg-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-lg-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-lg-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-lg-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-lg-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-lg-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-lg-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-lg-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-lg-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-lg-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-lg-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-lg-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-lg-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-lg-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-lg-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-lg-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-lg-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-lg-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-lg-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-lg-push-12 {
    left: 100%;
  }
  .coh-col-lg-pull-12 {
    right: 100%;
  }
  .coh-col-lg-offset-12 {
    margin-left: 100%;
  }
  .coh-col-lg-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-lg-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-lg-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-lg-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-lg-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-lg-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-lg-push-9 {
    left: 75%;
  }
  .coh-col-lg-pull-9 {
    right: 75%;
  }
  .coh-col-lg-offset-9 {
    margin-left: 75%;
  }
  .coh-col-lg-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-lg-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-lg-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-lg-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-lg-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-lg-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-lg-push-6 {
    left: 50%;
  }
  .coh-col-lg-pull-6 {
    right: 50%;
  }
  .coh-col-lg-offset-6 {
    margin-left: 50%;
  }
  .coh-col-lg-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-lg-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-lg-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-lg-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-lg-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-lg-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-lg-push-3 {
    left: 25%;
  }
  .coh-col-lg-pull-3 {
    right: 25%;
  }
  .coh-col-lg-offset-3 {
    margin-left: 25%;
  }
  .coh-col-lg-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-lg-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-lg-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-lg {
    display: block;
  }
  .coh-col-lg-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-lg-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-lg-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-lg {
    display: none;
  }
  .coh-col-lg-push-0 {
    left: auto;
  }
  .coh-col-lg-pull-0 {
    right: auto;
  }
  .coh-col-lg-offset-0 {
    margin-left: 0;
  }
  .coh-col-lg-push-1-5 {
    left: 20%;
  }
  .coh-col-lg-pull-1-5 {
    right: 20%;
  }
  .coh-col-lg-offset-1-5 {
    margin-left: 20%;
  }
}
@media (min-width: 1400px) {
  .coh-col-xl {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .coh-layout-col-xl {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .coh-col-xl-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .coh-layout-col-xl-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .coh-layout-col-xl-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .coh-col-xl-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-layout-col-xl-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .coh-col-xl-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-layout-col-xl-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .coh-col-xl-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-layout-col-xl-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .coh-col-xl-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-layout-col-xl-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .coh-col-xl-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-layout-col-xl-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .coh-col-xl-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-layout-col-xl-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .coh-col-xl-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-layout-col-xl-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .coh-col-xl-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-layout-col-xl-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .coh-col-xl-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-layout-col-xl-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .coh-col-xl-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-layout-col-xl-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .coh-col-xl-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-layout-col-xl-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .coh-col-xl-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-layout-col-xl-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-col-xl-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-layout-col-xl-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .coh-layout-col-xl-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .coh-col-xl-push-12 {
    left: 100%;
  }
  .coh-col-xl-pull-12 {
    right: 100%;
  }
  .coh-col-xl-offset-12 {
    margin-left: 100%;
  }
  .coh-col-xl-push-11 {
    left: 91.6666666667%;
  }
  .coh-col-xl-pull-11 {
    right: 91.6666666667%;
  }
  .coh-col-xl-offset-11 {
    margin-left: 91.6666666667%;
  }
  .coh-col-xl-push-10 {
    left: 83.3333333333%;
  }
  .coh-col-xl-pull-10 {
    right: 83.3333333333%;
  }
  .coh-col-xl-offset-10 {
    margin-left: 83.3333333333%;
  }
  .coh-col-xl-push-9 {
    left: 75%;
  }
  .coh-col-xl-pull-9 {
    right: 75%;
  }
  .coh-col-xl-offset-9 {
    margin-left: 75%;
  }
  .coh-col-xl-push-8 {
    left: 66.6666666667%;
  }
  .coh-col-xl-pull-8 {
    right: 66.6666666667%;
  }
  .coh-col-xl-offset-8 {
    margin-left: 66.6666666667%;
  }
  .coh-col-xl-push-7 {
    left: 58.3333333333%;
  }
  .coh-col-xl-pull-7 {
    right: 58.3333333333%;
  }
  .coh-col-xl-offset-7 {
    margin-left: 58.3333333333%;
  }
  .coh-col-xl-push-6 {
    left: 50%;
  }
  .coh-col-xl-pull-6 {
    right: 50%;
  }
  .coh-col-xl-offset-6 {
    margin-left: 50%;
  }
  .coh-col-xl-push-5 {
    left: 41.6666666667%;
  }
  .coh-col-xl-pull-5 {
    right: 41.6666666667%;
  }
  .coh-col-xl-offset-5 {
    margin-left: 41.6666666667%;
  }
  .coh-col-xl-push-4 {
    left: 33.3333333333%;
  }
  .coh-col-xl-pull-4 {
    right: 33.3333333333%;
  }
  .coh-col-xl-offset-4 {
    margin-left: 33.3333333333%;
  }
  .coh-col-xl-push-3 {
    left: 25%;
  }
  .coh-col-xl-pull-3 {
    right: 25%;
  }
  .coh-col-xl-offset-3 {
    margin-left: 25%;
  }
  .coh-col-xl-push-2 {
    left: 16.6666666667%;
  }
  .coh-col-xl-pull-2 {
    right: 16.6666666667%;
  }
  .coh-col-xl-offset-2 {
    margin-left: 16.6666666667%;
  }
  .coh-visible-xl {
    display: block;
  }
  .coh-col-xl-push-1 {
    left: 8.3333333333%;
  }
  .coh-col-xl-pull-1 {
    right: 8.3333333333%;
  }
  .coh-col-xl-offset-1 {
    margin-left: 8.3333333333%;
  }
  .coh-hidden-xl {
    display: none;
  }
  .coh-col-xl-push-0 {
    left: auto;
  }
  .coh-col-xl-pull-0 {
    right: auto;
  }
  .coh-col-xl-offset-0 {
    margin-left: 0;
  }
  .coh-col-xl-push-1-5 {
    left: 20%;
  }
  .coh-col-xl-pull-1-5 {
    right: 20%;
  }
  .coh-col-xl-offset-1-5 {
    margin-left: 20%;
  }
}
.coh-row-bleed-xs > .coh-row-inner {
  margin-right: 0;
  margin-left: 0;
}
.coh-row-bleed-xs > .coh-row-inner > .coh-column {
  padding-right: 0;
  padding-left: 0;
}
.coh-row-visible-xs {
  overflow: visible;
}
.coh-row-hidden-xs {
  overflow-x: hidden;
  overflow-y: auto;
}
.coh-row-xs > .coh-row-inner {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}
.coh-row-xs > .coh-row-inner > .coh-column {
  padding-left: 0.625rem;
  padding-right: 0.625rem;
}
@media (min-width: 565px) {
  .coh-row-xs > .coh-row-inner {
    margin-right: -0.9375rem;
    margin-left: -0.9375rem;
  }
  .coh-row-xs > .coh-row-inner > .coh-column {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }
}
@media (min-width: 768px) {
  .coh-row-xs > .coh-row-inner {
    margin-right: -0.9375rem;
    margin-left: -0.9375rem;
  }
  .coh-row-xs > .coh-row-inner > .coh-column {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }
}
@media (min-width: 1024px) {
  .coh-row-xs > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-xs > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1170px) {
  .coh-row-xs > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-xs > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1400px) {
  .coh-row-xs > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-xs > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 565px) {
  .coh-row-bleed-ps > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-ps > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-ps {
    overflow: visible;
  }
  .coh-row-hidden-ps {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (min-width: 565px) {
  .coh-row-ps > .coh-row-inner {
    margin-right: -0.9375rem;
    margin-left: -0.9375rem;
  }
  .coh-row-ps > .coh-row-inner > .coh-column {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }
}
@media (min-width: 768px) {
  .coh-row-ps > .coh-row-inner {
    margin-right: -0.9375rem;
    margin-left: -0.9375rem;
  }
  .coh-row-ps > .coh-row-inner > .coh-column {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }
}
@media (min-width: 1024px) {
  .coh-row-ps > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-ps > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1170px) {
  .coh-row-ps > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-ps > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1400px) {
  .coh-row-ps > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-ps > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 768px) {
  .coh-row-bleed-sm > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-sm > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-sm {
    overflow: visible;
  }
  .coh-row-hidden-sm {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (min-width: 768px) {
  .coh-row-sm > .coh-row-inner {
    margin-right: -0.9375rem;
    margin-left: -0.9375rem;
  }
  .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
  }
}
@media (min-width: 1024px) {
  .coh-row-sm > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1170px) {
  .coh-row-sm > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1400px) {
  .coh-row-sm > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1024px) {
  .coh-row-bleed-md > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-md > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-md {
    overflow: visible;
  }
  .coh-row-hidden-md {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (min-width: 1024px) {
  .coh-row-md > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1170px) {
  .coh-row-md > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1400px) {
  .coh-row-md > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1170px) {
  .coh-row-bleed-lg > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-lg > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-lg {
    overflow: visible;
  }
  .coh-row-hidden-lg {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (min-width: 1170px) {
  .coh-row-lg > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1400px) {
  .coh-row-lg > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
@media (min-width: 1400px) {
  .coh-row-bleed-xl > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-row-bleed-xl > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-row-visible-xl {
    overflow: visible;
  }
  .coh-row-hidden-xl {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (min-width: 1400px) {
  .coh-row-xl > .coh-row-inner {
    margin-right: -0.71875rem;
    margin-left: -0.71875rem;
  }
  .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 0.71875rem;
    padding-right: 0.71875rem;
  }
}
:root {
  --ssa-default-font-settings-font-family: 'Montserrat', sans-serif;
  --ssa-default-font-settings-color: rgb(252, 159, 67);
}
body {
  font-family: 'Montserrat', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  color: rgb(252, 159, 67);
}
:root {
  --ssa-base-unit-settings-font-size: 16px;
}
body {
  font-size: 16px;
}
@media (min-width: 1400px) {
  ul {
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  ul.toolbar-menu li {
    margin: 0;
    list-style-type: none;
    font-weight: normal;
  }
}
@media (min-width: 1400px) {
  ul.toolbar-menu li:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  ul.contextual-links li {
    list-style-type: none;
    font-weight: normal;
  }
}
@media (min-width: 1400px) {
  ul.contextual-links li:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  ul.cke_panel_list li {
    list-style-type: none;
    font-weight: normal;
  }
}
@media (min-width: 1400px) {
  ul.cke_panel_list li:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  ul.dx8-tabs li {
    list-style-type: none;
    font-weight: normal;
  }
}
@media (min-width: 1400px) {
  ul.dx8-tabs li:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  ul li {
    line-height: 1.5;
    margin-bottom: 1rem;
    margin-left: 2rem;
    list-style-type: disc;
    list-style-position: outside;
  }
}
@media (min-width: 1400px) {
  ul li ul {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  ul li ul li {
    margin-left: 1rem;
    list-style-type: circle;
  }
}
@media (min-width: 1400px) {
  p {
    font-size: 1rem;
    margin-bottom: 1.5rem;
    line-height: 1.5;
    font-weight: 400;
  }
}
@media (min-width: 1024px) {
  ol {
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1024px) {
  ol li {
    font-weight: 400;
    line-height: 1.5;
    margin-bottom: 1rem;
    margin-left: 2rem;
    list-style-type: decimal;
  }
}
@media (min-width: 1024px) {
  ol li ol {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1024px) {
  ol li ol li {
    margin-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  a {
    color: rgb(38, 163, 221);
    -webkit-transition: color 300ms ease;
    transition: color 300ms ease;
  }
}
@media (min-width: 1400px) {
  a:hover {
    color: rgb(112, 195, 233);
  }
}
@media (min-width: 1400px) {
  h5 {
    font-size: 1rem;
    line-height: 1.25;
    margin-bottom: 0.5rem;
    font-weight: bold;
  }
}
@media (min-width: 565px) {
  h4 {
    font-size: 0.75rem;
    line-height: 1.4;
  }
}
@media (min-width: 1024px) {
  h4 {
    font-size: 1.125rem;
  }
}
@media (min-width: 1400px) {
  h4 {
    font-size: 1.25rem;
    line-height: 1.25;
    margin-bottom: 1rem;
    font-weight: bold;
  }
}
@media (min-width: 565px) {
  h3 {
    font-size: 1.25rem;
  }
}
@media (min-width: 1024px) {
  h3 {
    font-size: 1.375rem;
  }
}
@media (min-width: 1400px) {
  h3 {
    font-size: 1.5rem;
    line-height: 1.25;
    font-weight: bold;
    margin-bottom: 1.25rem;
  }
}
@media (min-width: 565px) {
  h2 {
    font-size: 1.5rem;
  }
}
@media (min-width: 1024px) {
  h2 {
    font-size: 1.75rem;
  }
}
@media (min-width: 1400px) {
  h2 {
    font-weight: bold;
    font-size: 2rem;
    line-height: 1.25;
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 565px) {
  h1 {
    font-size: 1.75rem;
  }
}
@media (min-width: 1024px) {
  h1 {
    font-size: 2rem;
  }
}
@media (min-width: 1170px) {
  h1 {
    font-size: 2.5rem;
  }
}
@media (min-width: 1400px) {
  h1 {
    font-size: 3rem;
    line-height: 1.25;
    font-weight: bold;
    margin-bottom: 1.5rem;
  }
}
@media (min-width: 1400px) {
  body::-moz-selection {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
  }
  body::selection {
    background-color: rgb(38, 163, 221);
    color: rgb(255, 255, 255);
  }
}
@media (min-width: 768px) {
  body.menu-active {
    overflow: hidden;
  }
}
@media (min-width: 1400px) {
  body img {
    max-width: 100%;
    height: auto;
  }
}
@media (min-width: 1024px) {
  blockquote {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (min-width: 1400px) {
  blockquote {
    font-size: 1.25rem;
    line-height: 1.5;
    margin-bottom: 1.5rem;
    padding-right: 2rem;
    padding-left: 2rem;
    border-left-width: 0.125rem;
    border-left-style: solid;
    border-left-color: rgb(38, 163, 221);
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    width: 100%;
  }
}
@media (min-width: 1024px) {
  blockquote:before {
    font-size: 1.5rem;
  }
}
@media (min-width: 1400px) {
  blockquote:before {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    speak: none;
    font-variant: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: \"\\f10d\";
    font-family: icomoon;
    font-size: 1.5rem;
    color: rgb(38, 163, 221);
    font-style: normal;
    padding-bottom: 0.5rem;
    display: block;
  }
}
@media (min-width: 1400px) {
  blockquote p {
    font-size: 1.25rem;
  }
}
@media (min-width: 1400px) {
  form > * {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
}
@media (min-width: 1400px) {
  form label {
    font-weight: bold;
    margin-bottom: 0.5rem;
  }
}
@media (min-width: 1400px) {
  form label.form-required:after {
    content: \"*\";
    margin-left: 0.25rem;
    color: rgb(255, 0, 0);
  }
}
@media (min-width: 1400px) {
  form legend {
    font-weight: bold;
    margin-bottom: 0.5rem;
  }
}
@media (min-width: 1400px) {
  form .form-item {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}
@media (min-width: 1400px) {
  form .form-item.form-item-copy {
    padding-top: 0;
  }
}
@media (min-width: 1400px) {
  form .form-type-checkbox {
    position: relative;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media (min-width: 1400px) {
  form .form-type-checkbox + .form-type-checkbox {
    margin-top: 0.5rem;
  }
}
@media (min-width: 1400px) {
  form .form-type-checkbox .form-checkbox:checked + label:after {
    opacity: 1;
  }
}
@media (min-width: 1400px) {
  form .form-type-checkbox label {
    font-weight: normal;
    margin-bottom: 0;
  }
}
@media (min-width: 1400px) {
  form .form-type-checkbox label:before {
    pointer-events: none;
    background-color: rgb(242, 242, 242);
    height: 1.625rem;
    width: 1.625rem;
    position: absolute;
    top: 50%;
    left: 0;
    border-width: 0.0625rem;
    border-style: solid;
    border-color: rgb(191, 191, 191);
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    content: \"\";
  }
}
@media (min-width: 1400px) {
  form .form-type-checkbox label:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    pointer-events: none;
    color: rgb(38, 163, 221);
    font-size: 1.25rem;
    height: 1.75rem;
    width: 1.75rem;
    position: absolute;
    top: 50%;
    left: 0;
    opacity: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    content: \"\\f00c\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  form .form-checkbox {
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    height: 1.75rem;
    width: 1.75rem;
    margin-right: 0.5rem;
    opacity: 0;
  }
}
@media (min-width: 1400px) {
  form .form-type-radio {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    position: relative;
  }
}
@media (min-width: 1400px) {
  form .form-type-radio + .form-type-radio {
    margin-top: 0.5rem;
  }
}
@media (min-width: 1400px) {
  form .form-type-radio .form-radio:checked + label:after {
    opacity: 1;
  }
}
@media (min-width: 1400px) {
  form .form-type-radio label {
    margin-bottom: 0;
    font-weight: normal;
  }
}
@media (min-width: 1400px) {
  form .form-type-radio label:before {
    pointer-events: none;
    background-color: rgb(242, 242, 242);
    height: 1.625rem;
    width: 1.625rem;
    position: absolute;
    top: 0;
    left: 0;
    border-width: 0.0625rem;
    -webkit-border-radius: 50%;
            border-radius: 50%;
    border-style: solid;
    border-color: rgb(191, 191, 191);
    content: \"\";
  }
}
@media (min-width: 1400px) {
  form .form-type-radio label:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    pointer-events: none;
    color: rgb(38, 163, 221);
    font-size: 1rem;
    height: 1.75rem;
    width: 1.75rem;
    position: absolute;
    top: 0;
    left: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    opacity: 0;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    content: \"\\f111\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  form .form-radio {
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    height: 1.75rem;
    width: 1.75rem;
    margin-right: 0.5rem;
    opacity: 0;
  }
}
@media (min-width: 1400px) {
  form .form-type-select.form-item-field-multi-select-list label:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  form .form-type-select.form-item-field-multi-select-list label:after {
    content: normal;
  }
}
@media (min-width: 1400px) {
  form .form-type-select label:before {
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    pointer-events: none;
    background-color: rgb(38, 163, 221);
    height: 3.125rem;
    width: 3.125rem;
    bottom: 0;
    right: 0;
    content: \"\";
  }
}
@media (min-width: 1400px) {
  form .form-type-select label:after {
    line-height: 1.0;
    font-weight: normal;
    text-transform: none;
    pointer-events: none;
    color: rgb(255, 255, 255);
    font-size: 1.25rem;
    height: 3.125rem;
    width: 3.125rem;
    position: absolute;
    bottom: 0;
    right: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    content: \"\\f078\";
    font-family: icomoon;
  }
}
@media (min-width: 1400px) {
  form .form-select:not(.editor) {
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    line-height: 1.5;
    background-color: rgb(242, 242, 242);
    padding: 0.75rem;
    border-width: 0.0625rem;
    border-style: solid;
    border-color: rgb(191, 191, 191);
  }
}
@media (min-width: 1400px) {
  form .form-search {
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    line-height: 1.5;
    background-color: rgb(242, 242, 242);
    padding: 0.75rem;
    border-width: 0.0625rem;
    border-style: solid;
    border-color: rgb(191, 191, 191);
  }
}
@media (min-width: 1400px) {
  form .form-submit {
    -webkit-transition: background-color 300ms ease;
    transition: background-color 300ms ease;
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    color: rgb(38, 163, 221);
    font-weight: bold;
    line-height: 1.25;
    font-size: 0.875rem;
    background-color: rgb(242, 242, 242);
    padding: 1rem;
    border-style: none;
  }
}
@media (min-width: 1400px) {
  form .form-submit:hover {
    background-color: rgb(219, 219, 220);
  }
}
@media (min-width: 1400px) {
  form .form-submit.button--primary {
    color: rgb(255, 255, 255);
    background-color: rgb(38, 163, 221);
  }
}
@media (min-width: 1400px) {
  form .form-submit.button--primary:hover {
    background-color: rgb(26, 137, 201);
  }
}
@media (min-width: 1400px) {
  form .form-text {
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    line-height: 1.5;
    width: 100%;
    padding: 0.75rem;
    border-width: 0.0625rem;
    border-style: solid;
    border-color: rgb(191, 191, 191);
    background-color: rgb(242, 242, 242);
  }
}
@media (min-width: 1400px) {
  form .form-email {
    line-height: 1.5;
    background-color: rgb(242, 242, 242);
    width: 100%;
    padding: 0.75rem;
    border-width: 0.0625rem;
    border-style: solid;
    border-color: rgb(191, 191, 191);
  }
}
@media (min-width: 1400px) {
  form .form-textarea {
    line-height: 1.5;
    background-color: rgb(242, 242, 242);
    width: 100%;
    padding: 0.75rem;
    border-width: 0.0625rem;
    border-style: solid;
    border-color: rgb(191, 191, 191);
  }
}
@media (min-width: 1400px) {
  form .field--name-field-wysiwyg .form-type-select {
    position: static;
    display: block;
  }
}
@media (min-width: 1400px) {
  form .field--name-field-wysiwyg .form-type-select label:before {
    content: normal;
  }
}
@media (min-width: 1400px) {
  form .field--name-field-wysiwyg .form-type-select label:after {
    content: normal;
  }
}
@media (min-width: 1400px) {
  form .webform-element-description {
    margin-top: 0.5rem;
    font-size: 0.75rem;
  }
}

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__907f7f3b7c2fc7e121a02e7770bc0e30";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__907f7f3b7c2fc7e121a02e7770bc0e30", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
