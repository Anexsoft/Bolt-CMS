<?php

/* @bolt/components/panel-news-item.twig */
class __TwigTemplate_9a4b1e93855288d234cbe674afcab4f804e2dfb438763cce2b34e9e7d395795d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate((($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array(), "any", true, true)) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-news-item.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d58cdd9a162bde802b7e123dd536510f92cc6716d164d16adb049af16382df8 = $this->env->getExtension("native_profiler");
        $__internal_4d58cdd9a162bde802b7e123dd536510f92cc6716d164d16adb049af16382df8->enter($__internal_4d58cdd9a162bde802b7e123dd536510f92cc6716d164d16adb049af16382df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-news-item.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d58cdd9a162bde802b7e123dd536510f92cc6716d164d16adb049af16382df8->leave($__internal_4d58cdd9a162bde802b7e123dd536510f92cc6716d164d16adb049af16382df8_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_e1d59b8f637e24b5b2cbff8743e4d00016da856748d5466cc47593e09fa4482b = $this->env->getExtension("native_profiler");
        $__internal_e1d59b8f637e24b5b2cbff8743e4d00016da856748d5466cc47593e09fa4482b->enter($__internal_e1d59b8f637e24b5b2cbff8743e4d00016da856748d5466cc47593e09fa4482b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-news";
        
        $__internal_e1d59b8f637e24b5b2cbff8743e4d00016da856748d5466cc47593e09fa4482b->leave($__internal_e1d59b8f637e24b5b2cbff8743e4d00016da856748d5466cc47593e09fa4482b_prof);

    }

    // line 9
    public function block_panel_alert($context, array $blocks = array())
    {
        $__internal_7fb804d4f31a113b5af7b71e4c53b72898514f0a0c95d8ec26036b1bd3a7b541 = $this->env->getExtension("native_profiler");
        $__internal_7fb804d4f31a113b5af7b71e4c53b72898514f0a0c95d8ec26036b1bd3a7b541->enter($__internal_7fb804d4f31a113b5af7b71e4c53b72898514f0a0c95d8ec26036b1bd3a7b541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_alert"));

        // line 10
        echo "    ";
        if (($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "type", array()) == "alert")) {
            // line 11
            echo "        class=\"progress-bar progress-bar-danger progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px; font-weight: bold; color: #000;\"
    ";
        } else {
            // line 13
            echo "        class=\"panel-heading\"
    ";
        }
        
        $__internal_7fb804d4f31a113b5af7b71e4c53b72898514f0a0c95d8ec26036b1bd3a7b541->leave($__internal_7fb804d4f31a113b5af7b71e4c53b72898514f0a0c95d8ec26036b1bd3a7b541_prof);

    }

    // line 17
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_630837c6d5f5a7265cfffa7f71ecb08eb92c96a630fc8ec696a50c7688d3f4aa = $this->env->getExtension("native_profiler");
        $__internal_630837c6d5f5a7265cfffa7f71ecb08eb92c96a630fc8ec696a50c7688d3f4aa->enter($__internal_630837c6d5f5a7265cfffa7f71ecb08eb92c96a630fc8ec696a50c7688d3f4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-bullhorn";
        
        $__internal_630837c6d5f5a7265cfffa7f71ecb08eb92c96a630fc8ec696a50c7688d3f4aa->leave($__internal_630837c6d5f5a7265cfffa7f71ecb08eb92c96a630fc8ec696a50c7688d3f4aa_prof);

    }

    // line 19
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_b648d44dc07ce185b23e1de891e0dfb66616ec9a93cfb6743f7e382732eba529 = $this->env->getExtension("native_profiler");
        $__internal_b648d44dc07ce185b23e1de891e0dfb66616ec9a93cfb6743f7e382732eba529->enter($__internal_b648d44dc07ce185b23e1de891e0dfb66616ec9a93cfb6743f7e382732eba529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array()), "html", null, true);
        
        $__internal_b648d44dc07ce185b23e1de891e0dfb66616ec9a93cfb6743f7e382732eba529->leave($__internal_b648d44dc07ce185b23e1de891e0dfb66616ec9a93cfb6743f7e382732eba529_prof);

    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_a34497d94ff710bd296252790655591176fa35e23b434a0aed294a235dfbfaa5 = $this->env->getExtension("native_profiler");
        $__internal_a34497d94ff710bd296252790655591176fa35e23b434a0aed294a235dfbfaa5->enter($__internal_a34497d94ff710bd296252790655591176fa35e23b434a0aed294a235dfbfaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 22
        echo "    ";
        echo $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "teaser", array());
        echo "
";
        
        $__internal_a34497d94ff710bd296252790655591176fa35e23b434a0aed294a235dfbfaa5->leave($__internal_a34497d94ff710bd296252790655591176fa35e23b434a0aed294a235dfbfaa5_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-news-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  95 => 21,  83 => 19,  71 => 17,  62 => 13,  58 => 11,  55 => 10,  49 => 9,  37 => 7,  22 => 5,);
    }
}
/* {##*/
/*  # Sidebar-Panel-Item: Displays the latest news on Bolt*/
/*  # (Usage Example: Dashboards sidebar)*/
/*  #}*/
/* {% extends (news.title is defined) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}*/
/* */
/* {% block panel_class 'panel-news' %}*/
/* */
/* {% block panel_alert %}*/
/*     {% if news.type == 'alert' %}*/
/*         class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px; font-weight: bold; color: #000;"*/
/*     {% else %}*/
/*         class="panel-heading"*/
/*     {% endif %}*/
/* {% endblock panel_alert %}*/
/* */
/* {% block panel_icon 'fa-bullhorn' %}*/
/* */
/* {% block panel_head news.title %}*/
/* */
/* {% block panel_body %}*/
/*     {{ news.teaser|raw }}*/
/* {% endblock panel_body %}*/
/* */
