<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/index.html.php */
class __TwigTemplate_07eee08ffc5904a210cd0c2c538e839fada6c2b07037c0f78324b61e290a7c60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.php"));

        // line 1
        echo "<? /* @var \$view \\Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine */ ?>
<?php \$view->extend('layout.html.php') ?>

<?php \$view['slots']->start('title') ?>
    Bienvenue sur Clictacoiffure
<?php \$view['slots']->stop() ?>

<?php \$view['slots']->start('javascript-bloc') ?>
    <script type=\"application/javascript\">

    </script>
<?php \$view['slots']->stop() ?>





<section>
    <div class=\"block gray no-padding\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"lemon-slider\">
                    <div id=\"rev_slider_4_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"classicslider1\">
                        <div id=\"rev_slider_4_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\">
                            <ul>
                                <li data-index=\"rs-1\" data-transition=\"fade\" data-slotamount=\"7\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-title=\"Slide 1\">
                                    <!-- MAIN IMAGE -->
                                    <img   src=\"<?= \$view['assets']->getUrl('images/slider/slider1.jpg') ?>\"  alt=\"\"  data-bgposition=\"center center\"  data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"tp-caption layer1 tp-resizeme\"
                                         id=\"slide1-layer-1\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-165\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                         data-transform_out=\"s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"100\"
                                         data-splitin=\"chars\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:30px\">Need Some Stress Relief?
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class=\"tp-caption layer2 tp-resizeme\"
                                         id=\"slide1-layer-2\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-105\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:55px\">What We offers
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class=\"tp-caption layer3 tp-resizeme\"
                                         id=\"slide1-layer-3\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-30\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"2000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;padding:20px 40px;letter-spacing:2px;\">Treatmemts to Relax Your Body & Soul
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class=\"tp-caption layer4 tp-resizeme\"
                                         id=\"slide1-layer-4\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"40\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"2000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;line-height:30px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at odio odio. In ultrices<br/> massa tristique ullamcorper aliquet orci, egestas dapibus.
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <a href=\"#\" title=\"\" class=\"tp-caption layer5 tp-resizeme\"
                                       id=\"slide1-layer-5\"
                                       data-x=\"center\" data-hoffset=\"\"
                                       data-y=\"center\" data-voffset=\"140\"
                                       data-width=\"['auto','auto','auto','auto']\"
                                       data-height=\"['auto','auto','auto','auto']\"
                                       data-transform_idle=\"o:1;\"
                                       data-transform_in=\"x:-50px;skX:100px;opacity:0;s:2000;e:Power4.easeInOut;\"
                                       data-transform_out=\"s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                       data-start=\"2500\"
                                       data-splitin=\"none\"
                                       data-splitout=\"none\"
                                       data-responsive_offset=\"on\"
                                       data-elementdelay=\"0.05\" style=\"font-size:13px;padding:15px 75px 15px 35px;\">More Feature<i class=\"fa fa-angle-double-right\"></i>
                                    </a>
                                </li>
                                <li data-index=\"rs-2\" data-transition=\"fade\" data-slotamount=\"7\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-title=\"Slide 1\">
                                    <!-- MAIN IMAGE -->
                                    <img   src=\"<?= \$view['assets']->getUrl('images/slider/slider2.jpg') ?>\"  alt=\"\"  data-bgposition=\"center center\"  data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"tp-caption layer1 tp-resizeme\"
                                         id=\"slide2-layer-1\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-120\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"1000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:30px\">Welcome to
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class=\"tp-caption layer6 tp-resizeme\"
                                         id=\"slide2-layer-2\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-70\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:40px\">Lemon <i>Spa & Salon</i>
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class=\"tp-caption layer7 tp-resizeme\"
                                         id=\"slide2-layer-3\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-20\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"2000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;letter-spacing:4px\">Relax Your Body & Soul
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class=\"tp-caption layer4 tp-resizeme\"
                                         id=\"slide2-layer-4\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"40\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"2500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;line-height:30px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at odio odio. In ultrices<br/> massa tristique ullamcorper aliquet orci, egestas dapibus.
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <a href=\"#\" title=\"\" class=\"tp-caption layer5 tp-resizeme\"
                                       id=\"slide2-layer-5\"
                                       data-x=\"center\" data-hoffset=\"\"
                                       data-y=\"center\" data-voffset=\"140\"
                                       data-width=\"['auto','auto','auto','auto']\"
                                       data-height=\"['auto','auto','auto','auto']\"
                                       data-transform_idle=\"o:1;\"
                                       data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                       data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                       data-start=\"3000\"
                                       data-splitin=\"none\"
                                       data-splitout=\"none\"
                                       data-responsive_offset=\"on\"
                                       data-elementdelay=\"0.05\" style=\"font-size:13px;padding:15px 75px 15px 35px;\">More Feature<i class=\"fa fa-angle-double-right\"></i>
                                    </a>
                                </li>
                                <li data-index=\"rs-3\" data-transition=\"fade\" data-slotamount=\"7\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-title=\"Slide 1\">
                                    <!-- MAIN IMAGE -->
                                    <img   src=\"<?= \$view['assets']->getUrl('images/slider/slider3.jpg') ?>\"  alt=\"\"  data-bgposition=\"center center\"  data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"tp-caption layer1 tp-resizeme\"
                                         id=\"slide3-layer-1\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-120\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:30px\">Welcome to
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class=\"tp-caption layer6 tp-resizeme\"
                                         id=\"slide3-layer-2\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-70\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1200\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:40px\">Lemon <i>Spa & Salon</i>
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class=\"tp-caption layer7 tp-resizeme\"
                                         id=\"slide3-layer-3\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-20\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                         data-transform_out=\"s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1400\"
                                         data-splitin=\"chars\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;letter-spacing:4px\">Relax Your Body & Soul
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class=\"tp-caption layer4 tp-resizeme\"
                                         id=\"slide3-layer-4\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"40\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;line-height:30px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at odio odio. In ultrices<br/> massa tristique ullamcorper aliquet orci, egestas dapibus.
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <a href=\"#\" title=\"\" class=\"tp-caption layer5 tp-resizeme\"
                                       id=\"slide3-layer-5\"
                                       data-x=\"center\" data-hoffset=\"\"
                                       data-y=\"center\" data-voffset=\"140\"
                                       data-width=\"['auto','auto','auto','auto']\"
                                       data-height=\"['auto','auto','auto','auto']\"
                                       data-transform_idle=\"o:1;\"
                                       data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                       data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                       data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                       data-start=\"1500\"
                                       data-splitin=\"none\"
                                       data-splitout=\"none\"
                                       data-responsive_offset=\"on\"
                                       data-elementdelay=\"0.05\" style=\"font-size:13px;padding:15px 75px 15px 35px;\">More Feature<i class=\"fa fa-angle-double-right\"></i>
                                    </a>
                                </li>
                                <li data-index=\"rs-4\" data-transition=\"fade\" data-slotamount=\"7\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-title=\"Slide 1\">
                                    <!-- MAIN IMAGE -->
                                    <img   src=\"<?= \$view['assets']->getUrl('images/slider/slider4.jpg') ?>\"  alt=\"\"  data-bgposition=\"center center\"  data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"tp-caption layer1 tp-resizeme\"
                                         id=\"slide4-layer-1\"
                                         data-x=\"0\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-120\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                         data-transform_out=\"s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"500\"
                                         data-splitin=\"chars\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:30px\">Welcome to
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class=\"tp-caption layer6 tp-resizeme\"
                                         id=\"slide4-layer-2\"
                                         data-x=\"0\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-80\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:40px\">Lemon <i>Spa & Salon</i>
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class=\"tp-caption layer3 tp-resizeme\"
                                         id=\"slide4-layer-3\"
                                         data-x=\"0\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-20\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;padding:15px 30px;letter-spacing:2px;\">Relax Your Body & Soul
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class=\"tp-caption layer8 tp-resizeme\"
                                         id=\"slide4-layer-4\"
                                         data-x=\"0\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"50\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;line-height:30px\">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, <br /> consectetur, adipisci velit, sed quia non numquam eius.
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <a href=\"#\" title=\"\" class=\"tp-caption layer5 tp-resizeme\"
                                       id=\"slide4-layer-5\"
                                       data-x=\"0\" data-hoffset=\"\"
                                       data-y=\"center\" data-voffset=\"140\"
                                       data-width=\"['auto','auto','auto','auto']\"
                                       data-height=\"['auto','auto','auto','auto']\"
                                       data-transform_idle=\"o:1;\"
                                       data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                       data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                       data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                       data-start=\"1500\"
                                       data-splitin=\"none\"
                                       data-splitout=\"none\"
                                       data-responsive_offset=\"on\"
                                       data-elementdelay=\"0.05\" style=\"font-size:13px;padding:15px 75px 15px 35px;\">More Feature<i class=\"fa fa-angle-double-right\"></i>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Creative Slider  -->
            </div>
        </div>
    </div>
</section>


<section>
    <div class=\"block dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"appointment-box dark\">
                        <div class=\"appointment-title\">
                            <div class=\"title-inner\">
                                <span>Experience the art of Caring</span>
                                <h3>Make An Appointment</h3>
                            </div>
                        </div>
                        <form class=\"appointment-form\">
                            <div class=\"appointment-fields\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\"><input type=\"text\" placeholder=\"Your Name\" /></div>
                                    <div class=\"col-md-6\">
                                        <select>
                                            <option>Select Services</option>
                                            <option>Facial Massage</option>
                                            <option>Thigh Massage</option>
                                            <option>Spa Services</option>
                                            <option>Special Skin Care</option>
                                        </select>
                                    </div>
                                    <div class=\"col-md-3\"><input type=\"text\" placeholder=\"26/03/2016\" /></div>
                                    <div class=\"col-md-3\"><input type=\"text\" placeholder=\"Select Time\" /></div>
                                    <div class=\"col-md-6\"><input type=\"text\" placeholder=\"Phone No\" /></div>
                                    <div class=\"col-md-6\"><input type=\"email\" placeholder=\"Email Address\" /></div>
                                    <div class=\"col-md-6\"><input type=\"text\" placeholder=\"Your City\" /></div>
                                </div>
                            </div><!-- Appointment Fields -->
                            <div class=\"appointment-bottom\">
                                <div class=\"social-links\">
                                    <a href=\"#\" title=\"\"><i class=\"fa fa-skype\"></i></a>
                                    <a href=\"#\" title=\"\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\" title=\"\"><i class=\"fa fa-linkedin\"></i></a>
                                    <a href=\"#\" title=\"\"><i class=\"fa fa-facebook\"></i></a>
                                </div>
                                <a class=\"verify\" href=\"#\" title=\"\">Verify Your Booking Via Mobile Phone</a>
                                <a class=\"lemon-btn\" href=\"#\" title=\"\">Book Now <i class=\"fa fa-angle-double-right\"></i></a>
                            </div>
                        </form><!-- Appointment Form -->
                    </div><!-- Appointment Box -->
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class=\"block no-padding\">
        <div class=\"parallax still\" data-velocity=\"-.05\" style=\"background: rgba(0, 0, 0, 0) url(http://placehold.it/2442x1400) no-repeat 50% 0;\"></div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"price-tabs dark\">
                    <div class=\"tabs-selectors\">
                        <a class=\"url active\" href=\"#zero\" title=\"\">Hair</a>
                        <a class=\"url\" href=\"#one\" title=\"\">Make Up</a>
                        <a class=\"url\" href=\"#two\" title=\"\">Facial</a>
                        <a class=\"url\" href=\"#three\" title=\"\">Massage</a>
                        <a class=\"url\" href=\"#four\" title=\"\">Nail</a>
                        <a class=\"url\" href=\"#five\" title=\"\">Waxing</a>
                    </div><!-- Tabs Selectors -->
                    <div class=\"prices-tab-carousel\">
                        <div data-hash=\"zero\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Hair Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"one\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Make Up Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"two\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Facial Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"three\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Massage Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"four\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Nail Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"five\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Waxing Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                    </div><!-- Prices Tab Carousel -->
                </div><!-- Price Tabs -->
            </div>
        </div>
    </div>
</section>

<section>
    <div class=\"block dark dark2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"title style2\">
                        <span>Experience the art of caring</span>
                        <h2>LEMON SPA PRODUCTS</h2>
                        <p>Non numquam eius modi tempora incidunt ut labore et dolore magnam aliqu<br/> voluptatem. Ut enim ad minima veniam, quis nostrum</p>
                    </div>
                    <div class=\"lemon-product-wrapper dark\">
                        <div class=\"lemon-products-carousel\">
                            <div data-hash=\"product1\" class=\"lemon-slide\">
                                <div class=\"lemon-product-img\">
                                    <img src=\"http://placehold.it/585x450\" alt=\"\" />
                                    <a class=\"lemon-btn\" href=\"#\" title=\"\">Add to Cart <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                                <div class=\"lemon-product-detail\">
                                    <i>Spray Lotion</i>
                                    <h5>Spray Whitening Lotion</h5>
                                    <div class=\"star\">
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star-half-empty\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                    </div>
                                    <span class=\"price\">\$25.00 <i>/ Per Head</i></span>
                                    <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado. Secrets Resorts & Spas offer adults.</p>
                                    <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                            </div><!-- Lemon Slide -->
                            <div data-hash=\"product2\" class=\"lemon-slide\">
                                <div class=\"lemon-product-img\">
                                    <img src=\"http://placehold.it/585x450\" alt=\"\" />
                                    <a class=\"lemon-btn\" href=\"#\" title=\"\">Add to Cart <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                                <div class=\"lemon-product-detail\">
                                    <i>Spray Lotion</i>
                                    <h5>Spray Whitening Lotion</h5>
                                    <div class=\"star\">
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star-half-empty\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                    </div>
                                    <span class=\"price\">\$25.00 <i>/ Per Head</i></span>
                                    <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado. Secrets Resorts & Spas offer adults.</p>
                                    <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                            </div><!-- Lemon Slide -->
                            <div data-hash=\"product3\" class=\"lemon-slide\">
                                <div class=\"lemon-product-img\">
                                    <img src=\"http://placehold.it/585x450\" alt=\"\" />
                                    <a class=\"lemon-btn\" href=\"#\" title=\"\">Add to Cart <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                                <div class=\"lemon-product-detail\">
                                    <i>Spray Lotion</i>
                                    <h5>Spray Whitening Lotion</h5>
                                    <div class=\"star\">
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star-half-empty\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                    </div>
                                    <span class=\"price\">\$25.00 <i>/ Per Head</i></span>
                                    <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado. Secrets Resorts & Spas offer adults.</p>
                                    <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                            </div><!-- Lemon Slide -->
                            <div data-hash=\"product4\" class=\"lemon-slide\">
                                <div class=\"lemon-product-img\">
                                    <img src=\"http://placehold.it/585x450\" alt=\"\" />
                                    <a class=\"lemon-btn\" href=\"#\" title=\"\">Add to Cart <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                                <div class=\"lemon-product-detail\">
                                    <i>Spray Lotion</i>
                                    <h5>Spray Whitening Lotion</h5>
                                    <div class=\"star\">
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star-half-empty\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                    </div>
                                    <span class=\"price\">\$25.00 <i>/ Per Head</i></span>
                                    <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado. Secrets Resorts & Spas offer adults.</p>
                                    <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                            </div><!-- Lemon Slide -->
                        </div><!-- Lemon Products Slide -->

                        <div class=\"lemon-product-selectors\">
                            <a class=\"active url\" href=\"#product1\" title=\"\"><img src=\"http://placehold.it/100x100\" alt=\"\" /></a>
                            <a class=\"url\" href=\"#product2\" title=\"\"><img src=\"http://placehold.it/100x100\" alt=\"\" /></a>
                            <a class=\"url\" href=\"#product3\" title=\"\"><img src=\"http://placehold.it/100x100\" alt=\"\" /></a>
                            <a class=\"url\" href=\"#product4\" title=\"\"><img src=\"http://placehold.it/100x100\" alt=\"\" /></a>
                        </div><!-- Lemon Product Selectors -->
                    </div><!-- Lemon Product Wrapper -->
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class=\"half-parallax dark block blackish\">
        <div class=\"parallax still\" data-velocity=\"-.05\" style=\"background: rgba(0, 0, 0, 0) url(http://placehold.it/2442x1400) no-repeat 50% 0;\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"title style2\">
                        <span>Experience the art of caring</span>
                        <h2>LEMON SPA PRODUCTS</h2>
                        <p>Non numquam eius modi tempora incidunt ut labore et dolore magnam aliqu<br/> voluptatem. Ut enim ad minima veniam, quis nostrum</p>
                    </div>

                    <div class=\"blog-posts dark\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"lemon-post\">
                                    <div class=\"lemon-post-img\">
                                        <img src=\"http://placehold.it/370x328\" alt=\"\" />
                                        <span>25 MARCH 2015</span>
                                    </div>
                                    <div class=\"lemon-post-detail\">
                                        <h5><a href=\"#\" title=\"\">Carries Away The Body's Waste Products</a></h5>
                                        <ul class=\"meta\">
                                            <li><i class=\"fa fa-user\"></i> By <a href=\"#\" title=\"\">Ackerley Doe </a></li>
                                            <li><i class=\"fa fa-tags\"></i> In <a href=\"#\" title=\"\">Spa </a>, <a href=\"#\" title=\"\">News</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit diam.</p>
                                        <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </div><!-- Lemon Post -->
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"lemon-post\">
                                    <div class=\"lemon-post-img\">
                                        <img src=\"http://placehold.it/370x328\" alt=\"\" />
                                        <span>28 MARCH 2015</span>
                                    </div>
                                    <div class=\"lemon-post-detail\">
                                        <h5><a href=\"#\" title=\"\">Achieve Flawless Skin In 25 Minutes</a></h5>
                                        <ul class=\"meta\">
                                            <li><i class=\"fa fa-user\"></i> By <a href=\"#\" title=\"\">Ackerley Doe </a></li>
                                            <li><i class=\"fa fa-tags\"></i> In <a href=\"#\" title=\"\">Spa </a>, <a href=\"#\" title=\"\">News</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit diam.</p>
                                        <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </div><!-- Lemon Post -->
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"lemon-post\">
                                    <div class=\"lemon-post-img\">
                                        <img src=\"http://placehold.it/370x328\" alt=\"\" />
                                        <span>30 MARCH 2015</span>
                                    </div>
                                    <div class=\"lemon-post-detail\">
                                        <h5><a href=\"#\" title=\"\">Duis Autem Vel Eum Iriure Dolor In Hendrerit.</a></h5>
                                        <ul class=\"meta\">
                                            <li><i class=\"fa fa-user\"></i> By <a href=\"#\" title=\"\">Ackerley Doe </a></li>
                                            <li><i class=\"fa fa-tags\"></i> In <a href=\"#\" title=\"\">Spa </a>, <a href=\"#\" title=\"\">News</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit diam.</p>
                                        <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </div><!-- Lemon Post -->
                            </div>
                        </div>
                    </div><!-- Blog Posts -->
                    <div class=\"go-button style2\">
                        <a title=\"\" href=\"blog.html\" class=\"lemon-btn\">View All Posts\t<i class=\"fa fa-angle-double-right\"></i></a>
                    </div><!-- Go Button -->
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class=\"block less-spacing dark2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"logos-carousel\">
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                    </div><!-- Logos Carousel -->
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class=\"block no-padding\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"lemon-newsletter\">
                    <div class=\"newsletter-title\">
                        <i>Experience the art of caring</i>
                        <h4>GET LEMON AMAZING OFFERS</h4>
                    </div>
                    <div class=\"newsletter-form\">
                        <form>
                            <input type=\"text\" placeholder=\"Entrez votre Email\" />
                            <button>Inscrivez-vous maintenant</button>
                        </form>
                    </div>
                </div><!-- Lemon Newsletter -->
            </div>
        </div>
    </div>
</section>


<section>
    <div class=\"block no-padding\">
        <div class=\"row\">
            <div class=\"col-md-12 column\">
                <div class=\"map\">
                    <div id=\"map-canvas\"></div>
                    <div class=\"contact-button\">
                        <a class=\"lemon-btn\" href=\"/contact\" title=\"\">Contact Us Now\t<i class=\"fa fa-angle-double-right\"></i></a>
                    </div>
                </div><!-- Google Map -->
            </div>
        </div>
    </div>
</section>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<? /* @var \$view \\Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine */ ?>
<?php \$view->extend('layout.html.php') ?>

<?php \$view['slots']->start('title') ?>
    Bienvenue sur Clictacoiffure
<?php \$view['slots']->stop() ?>

<?php \$view['slots']->start('javascript-bloc') ?>
    <script type=\"application/javascript\">

    </script>
<?php \$view['slots']->stop() ?>





<section>
    <div class=\"block gray no-padding\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"lemon-slider\">
                    <div id=\"rev_slider_4_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"classicslider1\">
                        <div id=\"rev_slider_4_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\">
                            <ul>
                                <li data-index=\"rs-1\" data-transition=\"fade\" data-slotamount=\"7\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-title=\"Slide 1\">
                                    <!-- MAIN IMAGE -->
                                    <img   src=\"<?= \$view['assets']->getUrl('images/slider/slider1.jpg') ?>\"  alt=\"\"  data-bgposition=\"center center\"  data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"tp-caption layer1 tp-resizeme\"
                                         id=\"slide1-layer-1\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-165\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                         data-transform_out=\"s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"100\"
                                         data-splitin=\"chars\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:30px\">Need Some Stress Relief?
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class=\"tp-caption layer2 tp-resizeme\"
                                         id=\"slide1-layer-2\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-105\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:55px\">What We offers
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class=\"tp-caption layer3 tp-resizeme\"
                                         id=\"slide1-layer-3\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-30\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"2000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;padding:20px 40px;letter-spacing:2px;\">Treatmemts to Relax Your Body & Soul
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class=\"tp-caption layer4 tp-resizeme\"
                                         id=\"slide1-layer-4\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"40\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"2000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;line-height:30px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at odio odio. In ultrices<br/> massa tristique ullamcorper aliquet orci, egestas dapibus.
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <a href=\"#\" title=\"\" class=\"tp-caption layer5 tp-resizeme\"
                                       id=\"slide1-layer-5\"
                                       data-x=\"center\" data-hoffset=\"\"
                                       data-y=\"center\" data-voffset=\"140\"
                                       data-width=\"['auto','auto','auto','auto']\"
                                       data-height=\"['auto','auto','auto','auto']\"
                                       data-transform_idle=\"o:1;\"
                                       data-transform_in=\"x:-50px;skX:100px;opacity:0;s:2000;e:Power4.easeInOut;\"
                                       data-transform_out=\"s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                       data-start=\"2500\"
                                       data-splitin=\"none\"
                                       data-splitout=\"none\"
                                       data-responsive_offset=\"on\"
                                       data-elementdelay=\"0.05\" style=\"font-size:13px;padding:15px 75px 15px 35px;\">More Feature<i class=\"fa fa-angle-double-right\"></i>
                                    </a>
                                </li>
                                <li data-index=\"rs-2\" data-transition=\"fade\" data-slotamount=\"7\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-title=\"Slide 1\">
                                    <!-- MAIN IMAGE -->
                                    <img   src=\"<?= \$view['assets']->getUrl('images/slider/slider2.jpg') ?>\"  alt=\"\"  data-bgposition=\"center center\"  data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"tp-caption layer1 tp-resizeme\"
                                         id=\"slide2-layer-1\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-120\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"1000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:30px\">Welcome to
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class=\"tp-caption layer6 tp-resizeme\"
                                         id=\"slide2-layer-2\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-70\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:40px\">Lemon <i>Spa & Salon</i>
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class=\"tp-caption layer7 tp-resizeme\"
                                         id=\"slide2-layer-3\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-20\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"2000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;letter-spacing:4px\">Relax Your Body & Soul
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class=\"tp-caption layer4 tp-resizeme\"
                                         id=\"slide2-layer-4\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"40\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"2500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;line-height:30px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at odio odio. In ultrices<br/> massa tristique ullamcorper aliquet orci, egestas dapibus.
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <a href=\"#\" title=\"\" class=\"tp-caption layer5 tp-resizeme\"
                                       id=\"slide2-layer-5\"
                                       data-x=\"center\" data-hoffset=\"\"
                                       data-y=\"center\" data-voffset=\"140\"
                                       data-width=\"['auto','auto','auto','auto']\"
                                       data-height=\"['auto','auto','auto','auto']\"
                                       data-transform_idle=\"o:1;\"
                                       data-transform_in=\"y:-50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                       data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                       data-start=\"3000\"
                                       data-splitin=\"none\"
                                       data-splitout=\"none\"
                                       data-responsive_offset=\"on\"
                                       data-elementdelay=\"0.05\" style=\"font-size:13px;padding:15px 75px 15px 35px;\">More Feature<i class=\"fa fa-angle-double-right\"></i>
                                    </a>
                                </li>
                                <li data-index=\"rs-3\" data-transition=\"fade\" data-slotamount=\"7\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-title=\"Slide 1\">
                                    <!-- MAIN IMAGE -->
                                    <img   src=\"<?= \$view['assets']->getUrl('images/slider/slider3.jpg') ?>\"  alt=\"\"  data-bgposition=\"center center\"  data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"tp-caption layer1 tp-resizeme\"
                                         id=\"slide3-layer-1\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-120\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1000\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:30px\">Welcome to
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class=\"tp-caption layer6 tp-resizeme\"
                                         id=\"slide3-layer-2\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-70\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1200\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:40px\">Lemon <i>Spa & Salon</i>
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class=\"tp-caption layer7 tp-resizeme\"
                                         id=\"slide3-layer-3\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-20\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                         data-transform_out=\"s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1400\"
                                         data-splitin=\"chars\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;letter-spacing:4px\">Relax Your Body & Soul
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class=\"tp-caption layer4 tp-resizeme\"
                                         id=\"slide3-layer-4\"
                                         data-x=\"center\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"40\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;line-height:30px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at odio odio. In ultrices<br/> massa tristique ullamcorper aliquet orci, egestas dapibus.
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <a href=\"#\" title=\"\" class=\"tp-caption layer5 tp-resizeme\"
                                       id=\"slide3-layer-5\"
                                       data-x=\"center\" data-hoffset=\"\"
                                       data-y=\"center\" data-voffset=\"140\"
                                       data-width=\"['auto','auto','auto','auto']\"
                                       data-height=\"['auto','auto','auto','auto']\"
                                       data-transform_idle=\"o:1;\"
                                       data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                       data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                       data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                       data-start=\"1500\"
                                       data-splitin=\"none\"
                                       data-splitout=\"none\"
                                       data-responsive_offset=\"on\"
                                       data-elementdelay=\"0.05\" style=\"font-size:13px;padding:15px 75px 15px 35px;\">More Feature<i class=\"fa fa-angle-double-right\"></i>
                                    </a>
                                </li>
                                <li data-index=\"rs-4\" data-transition=\"fade\" data-slotamount=\"7\"  data-easein=\"Power4.easeInOut\" data-easeout=\"Power4.easeInOut\" data-masterspeed=\"2000\" data-title=\"Slide 1\">
                                    <!-- MAIN IMAGE -->
                                    <img   src=\"<?= \$view['assets']->getUrl('images/slider/slider4.jpg') ?>\"  alt=\"\"  data-bgposition=\"center center\"  data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"tp-caption layer1 tp-resizeme\"
                                         id=\"slide4-layer-1\"
                                         data-x=\"0\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-120\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;\"
                                         data-transform_out=\"s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"500\"
                                         data-splitin=\"chars\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:30px\">Welcome to
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class=\"tp-caption layer6 tp-resizeme\"
                                         id=\"slide4-layer-2\"
                                         data-x=\"0\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-80\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"y:50px;opacity:0;s:1500;e:Power3.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:40px\">Lemon <i>Spa & Salon</i>
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class=\"tp-caption layer3 tp-resizeme\"
                                         id=\"slide4-layer-3\"
                                         data-x=\"0\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"-20\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;padding:15px 30px;letter-spacing:2px;\">Relax Your Body & Soul
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class=\"tp-caption layer8 tp-resizeme\"
                                         id=\"slide4-layer-4\"
                                         data-x=\"0\" data-hoffset=\"\"
                                         data-y=\"center\" data-voffset=\"50\"
                                         data-width=\"['auto','auto','auto','auto']\"
                                         data-height=\"['auto','auto','auto','auto']\"
                                         data-transform_idle=\"o:1;\"
                                         data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                         data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                         data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                         data-start=\"1500\"
                                         data-splitin=\"none\"
                                         data-splitout=\"none\"
                                         data-responsive_offset=\"on\"
                                         data-elementdelay=\"0.05\" style=\"font-size:16px;line-height:30px\">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, <br /> consectetur, adipisci velit, sed quia non numquam eius.
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <a href=\"#\" title=\"\" class=\"tp-caption layer5 tp-resizeme\"
                                       id=\"slide4-layer-5\"
                                       data-x=\"0\" data-hoffset=\"\"
                                       data-y=\"center\" data-voffset=\"140\"
                                       data-width=\"['auto','auto','auto','auto']\"
                                       data-height=\"['auto','auto','auto','auto']\"
                                       data-transform_idle=\"o:1;\"
                                       data-transform_in=\"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;\"
                                       data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\"
                                       data-mask_in=\"x:0px;y:0px;s:inherit;e:inherit;\"
                                       data-start=\"1500\"
                                       data-splitin=\"none\"
                                       data-splitout=\"none\"
                                       data-responsive_offset=\"on\"
                                       data-elementdelay=\"0.05\" style=\"font-size:13px;padding:15px 75px 15px 35px;\">More Feature<i class=\"fa fa-angle-double-right\"></i>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Creative Slider  -->
            </div>
        </div>
    </div>
</section>


<section>
    <div class=\"block dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"appointment-box dark\">
                        <div class=\"appointment-title\">
                            <div class=\"title-inner\">
                                <span>Experience the art of Caring</span>
                                <h3>Make An Appointment</h3>
                            </div>
                        </div>
                        <form class=\"appointment-form\">
                            <div class=\"appointment-fields\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\"><input type=\"text\" placeholder=\"Your Name\" /></div>
                                    <div class=\"col-md-6\">
                                        <select>
                                            <option>Select Services</option>
                                            <option>Facial Massage</option>
                                            <option>Thigh Massage</option>
                                            <option>Spa Services</option>
                                            <option>Special Skin Care</option>
                                        </select>
                                    </div>
                                    <div class=\"col-md-3\"><input type=\"text\" placeholder=\"26/03/2016\" /></div>
                                    <div class=\"col-md-3\"><input type=\"text\" placeholder=\"Select Time\" /></div>
                                    <div class=\"col-md-6\"><input type=\"text\" placeholder=\"Phone No\" /></div>
                                    <div class=\"col-md-6\"><input type=\"email\" placeholder=\"Email Address\" /></div>
                                    <div class=\"col-md-6\"><input type=\"text\" placeholder=\"Your City\" /></div>
                                </div>
                            </div><!-- Appointment Fields -->
                            <div class=\"appointment-bottom\">
                                <div class=\"social-links\">
                                    <a href=\"#\" title=\"\"><i class=\"fa fa-skype\"></i></a>
                                    <a href=\"#\" title=\"\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\" title=\"\"><i class=\"fa fa-linkedin\"></i></a>
                                    <a href=\"#\" title=\"\"><i class=\"fa fa-facebook\"></i></a>
                                </div>
                                <a class=\"verify\" href=\"#\" title=\"\">Verify Your Booking Via Mobile Phone</a>
                                <a class=\"lemon-btn\" href=\"#\" title=\"\">Book Now <i class=\"fa fa-angle-double-right\"></i></a>
                            </div>
                        </form><!-- Appointment Form -->
                    </div><!-- Appointment Box -->
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class=\"block no-padding\">
        <div class=\"parallax still\" data-velocity=\"-.05\" style=\"background: rgba(0, 0, 0, 0) url(http://placehold.it/2442x1400) no-repeat 50% 0;\"></div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"price-tabs dark\">
                    <div class=\"tabs-selectors\">
                        <a class=\"url active\" href=\"#zero\" title=\"\">Hair</a>
                        <a class=\"url\" href=\"#one\" title=\"\">Make Up</a>
                        <a class=\"url\" href=\"#two\" title=\"\">Facial</a>
                        <a class=\"url\" href=\"#three\" title=\"\">Massage</a>
                        <a class=\"url\" href=\"#four\" title=\"\">Nail</a>
                        <a class=\"url\" href=\"#five\" title=\"\">Waxing</a>
                    </div><!-- Tabs Selectors -->
                    <div class=\"prices-tab-carousel\">
                        <div data-hash=\"zero\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Hair Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"one\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Make Up Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"two\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Facial Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"three\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Massage Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"four\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Nail Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                        <div data-hash=\"five\" class=\"price-slide\">
                            <div class=\"price-slide-title\">
                                <div class=\"price-title-inner\">
                                    <i>Experience the art of Caring</i>
                                    <h4>Waxing Packages</h4>
                                </div>
                            </div>
                            <ul>
                                <li><strong>Braids & Twists</strong> <span>\$25</span></li>
                                <li><strong>Hair Color</strong> <span>\$40</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Extension Per Track</strong> <span>\$13</span></li>
                                <li><strong>Corrective Color</strong> <span>\$34</span></li>
                                <li><strong>Hair Extension</strong> <span>\$48</span></li>
                                <li><strong>Haircut</strong> <span>\$32</span></li>
                                <li><strong>Thermal Add on</strong> <span>\$24</span></li>
                                <li><strong>Partial Foil</strong> <span>\$29</span></li>
                            </ul>
                        </div><!-- Price Slide -->
                    </div><!-- Prices Tab Carousel -->
                </div><!-- Price Tabs -->
            </div>
        </div>
    </div>
</section>

<section>
    <div class=\"block dark dark2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"title style2\">
                        <span>Experience the art of caring</span>
                        <h2>LEMON SPA PRODUCTS</h2>
                        <p>Non numquam eius modi tempora incidunt ut labore et dolore magnam aliqu<br/> voluptatem. Ut enim ad minima veniam, quis nostrum</p>
                    </div>
                    <div class=\"lemon-product-wrapper dark\">
                        <div class=\"lemon-products-carousel\">
                            <div data-hash=\"product1\" class=\"lemon-slide\">
                                <div class=\"lemon-product-img\">
                                    <img src=\"http://placehold.it/585x450\" alt=\"\" />
                                    <a class=\"lemon-btn\" href=\"#\" title=\"\">Add to Cart <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                                <div class=\"lemon-product-detail\">
                                    <i>Spray Lotion</i>
                                    <h5>Spray Whitening Lotion</h5>
                                    <div class=\"star\">
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star-half-empty\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                    </div>
                                    <span class=\"price\">\$25.00 <i>/ Per Head</i></span>
                                    <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado. Secrets Resorts & Spas offer adults.</p>
                                    <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                            </div><!-- Lemon Slide -->
                            <div data-hash=\"product2\" class=\"lemon-slide\">
                                <div class=\"lemon-product-img\">
                                    <img src=\"http://placehold.it/585x450\" alt=\"\" />
                                    <a class=\"lemon-btn\" href=\"#\" title=\"\">Add to Cart <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                                <div class=\"lemon-product-detail\">
                                    <i>Spray Lotion</i>
                                    <h5>Spray Whitening Lotion</h5>
                                    <div class=\"star\">
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star-half-empty\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                    </div>
                                    <span class=\"price\">\$25.00 <i>/ Per Head</i></span>
                                    <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado. Secrets Resorts & Spas offer adults.</p>
                                    <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                            </div><!-- Lemon Slide -->
                            <div data-hash=\"product3\" class=\"lemon-slide\">
                                <div class=\"lemon-product-img\">
                                    <img src=\"http://placehold.it/585x450\" alt=\"\" />
                                    <a class=\"lemon-btn\" href=\"#\" title=\"\">Add to Cart <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                                <div class=\"lemon-product-detail\">
                                    <i>Spray Lotion</i>
                                    <h5>Spray Whitening Lotion</h5>
                                    <div class=\"star\">
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star-half-empty\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                    </div>
                                    <span class=\"price\">\$25.00 <i>/ Per Head</i></span>
                                    <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado. Secrets Resorts & Spas offer adults.</p>
                                    <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                            </div><!-- Lemon Slide -->
                            <div data-hash=\"product4\" class=\"lemon-slide\">
                                <div class=\"lemon-product-img\">
                                    <img src=\"http://placehold.it/585x450\" alt=\"\" />
                                    <a class=\"lemon-btn\" href=\"#\" title=\"\">Add to Cart <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                                <div class=\"lemon-product-detail\">
                                    <i>Spray Lotion</i>
                                    <h5>Spray Whitening Lotion</h5>
                                    <div class=\"star\">
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star\"></i>
                                        <i class=\"fa fa-star-half-empty\"></i>
                                        <i class=\"fa fa-star-o\"></i>
                                    </div>
                                    <span class=\"price\">\$25.00 <i>/ Per Head</i></span>
                                    <p>Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lab ore et dolore magna aliquyam erat, sed diam Demo Label. Avero eos et accusam et justo duo dolores. At vero eos et accusam et justo duodolores et ea rebum. Lorem ipsum dolor sit amet conse ctuere colorado. Secrets Resorts & Spas offer adults.</p>
                                    <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-double-right\"></i></a>
                                </div>
                            </div><!-- Lemon Slide -->
                        </div><!-- Lemon Products Slide -->

                        <div class=\"lemon-product-selectors\">
                            <a class=\"active url\" href=\"#product1\" title=\"\"><img src=\"http://placehold.it/100x100\" alt=\"\" /></a>
                            <a class=\"url\" href=\"#product2\" title=\"\"><img src=\"http://placehold.it/100x100\" alt=\"\" /></a>
                            <a class=\"url\" href=\"#product3\" title=\"\"><img src=\"http://placehold.it/100x100\" alt=\"\" /></a>
                            <a class=\"url\" href=\"#product4\" title=\"\"><img src=\"http://placehold.it/100x100\" alt=\"\" /></a>
                        </div><!-- Lemon Product Selectors -->
                    </div><!-- Lemon Product Wrapper -->
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class=\"half-parallax dark block blackish\">
        <div class=\"parallax still\" data-velocity=\"-.05\" style=\"background: rgba(0, 0, 0, 0) url(http://placehold.it/2442x1400) no-repeat 50% 0;\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"title style2\">
                        <span>Experience the art of caring</span>
                        <h2>LEMON SPA PRODUCTS</h2>
                        <p>Non numquam eius modi tempora incidunt ut labore et dolore magnam aliqu<br/> voluptatem. Ut enim ad minima veniam, quis nostrum</p>
                    </div>

                    <div class=\"blog-posts dark\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"lemon-post\">
                                    <div class=\"lemon-post-img\">
                                        <img src=\"http://placehold.it/370x328\" alt=\"\" />
                                        <span>25 MARCH 2015</span>
                                    </div>
                                    <div class=\"lemon-post-detail\">
                                        <h5><a href=\"#\" title=\"\">Carries Away The Body's Waste Products</a></h5>
                                        <ul class=\"meta\">
                                            <li><i class=\"fa fa-user\"></i> By <a href=\"#\" title=\"\">Ackerley Doe </a></li>
                                            <li><i class=\"fa fa-tags\"></i> In <a href=\"#\" title=\"\">Spa </a>, <a href=\"#\" title=\"\">News</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit diam.</p>
                                        <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </div><!-- Lemon Post -->
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"lemon-post\">
                                    <div class=\"lemon-post-img\">
                                        <img src=\"http://placehold.it/370x328\" alt=\"\" />
                                        <span>28 MARCH 2015</span>
                                    </div>
                                    <div class=\"lemon-post-detail\">
                                        <h5><a href=\"#\" title=\"\">Achieve Flawless Skin In 25 Minutes</a></h5>
                                        <ul class=\"meta\">
                                            <li><i class=\"fa fa-user\"></i> By <a href=\"#\" title=\"\">Ackerley Doe </a></li>
                                            <li><i class=\"fa fa-tags\"></i> In <a href=\"#\" title=\"\">Spa </a>, <a href=\"#\" title=\"\">News</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit diam.</p>
                                        <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </div><!-- Lemon Post -->
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"lemon-post\">
                                    <div class=\"lemon-post-img\">
                                        <img src=\"http://placehold.it/370x328\" alt=\"\" />
                                        <span>30 MARCH 2015</span>
                                    </div>
                                    <div class=\"lemon-post-detail\">
                                        <h5><a href=\"#\" title=\"\">Duis Autem Vel Eum Iriure Dolor In Hendrerit.</a></h5>
                                        <ul class=\"meta\">
                                            <li><i class=\"fa fa-user\"></i> By <a href=\"#\" title=\"\">Ackerley Doe </a></li>
                                            <li><i class=\"fa fa-tags\"></i> In <a href=\"#\" title=\"\">Spa </a>, <a href=\"#\" title=\"\">News</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit diam.</p>
                                        <a class=\"view-all\" href=\"#\" title=\"\">Read More <i class=\"fa fa-angle-right\"></i></a>
                                    </div>
                                </div><!-- Lemon Post -->
                            </div>
                        </div>
                    </div><!-- Blog Posts -->
                    <div class=\"go-button style2\">
                        <a title=\"\" href=\"blog.html\" class=\"lemon-btn\">View All Posts\t<i class=\"fa fa-angle-double-right\"></i></a>
                    </div><!-- Go Button -->
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class=\"block less-spacing dark2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"logos-carousel\">
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                        <a href=\"#\" title=\"\"><img src=\"http://placehold.it/180x132\" alt=\"\" /></a>
                    </div><!-- Logos Carousel -->
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class=\"block no-padding\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"lemon-newsletter\">
                    <div class=\"newsletter-title\">
                        <i>Experience the art of caring</i>
                        <h4>GET LEMON AMAZING OFFERS</h4>
                    </div>
                    <div class=\"newsletter-form\">
                        <form>
                            <input type=\"text\" placeholder=\"Entrez votre Email\" />
                            <button>Inscrivez-vous maintenant</button>
                        </form>
                    </div>
                </div><!-- Lemon Newsletter -->
            </div>
        </div>
    </div>
</section>


<section>
    <div class=\"block no-padding\">
        <div class=\"row\">
            <div class=\"col-md-12 column\">
                <div class=\"map\">
                    <div id=\"map-canvas\"></div>
                    <div class=\"contact-button\">
                        <a class=\"lemon-btn\" href=\"/contact\" title=\"\">Contact Us Now\t<i class=\"fa fa-angle-double-right\"></i></a>
                    </div>
                </div><!-- Google Map -->
            </div>
        </div>
    </div>
</section>", "index/index.html.php", "/var/www/html/WP/templates/index/index.html.php");
    }
}
