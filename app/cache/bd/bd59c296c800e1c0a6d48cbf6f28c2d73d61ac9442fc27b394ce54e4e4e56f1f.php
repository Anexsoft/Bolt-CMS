<?php

/* notfound.twig */
class __TwigTemplate_3fdb0d230a3dad3ab0b5dee298ec7e09f672674d12f8824489314a6b80c3ecab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "notfound.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bfc4d0c8549efd886ec655527d4643ae250e6a646e433376a862b046c959da7 = $this->env->getExtension("native_profiler");
        $__internal_0bfc4d0c8549efd886ec655527d4643ae250e6a646e433376a862b046c959da7->enter($__internal_0bfc4d0c8549efd886ec655527d4643ae250e6a646e433376a862b046c959da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notfound.twig"));

        // line 3
        $template_storage = $context['app']['storage'];
        $context['record'] =         $template_storage->getContent("blocks/404-not-found", array() );
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bfc4d0c8549efd886ec655527d4643ae250e6a646e433376a862b046c959da7->leave($__internal_0bfc4d0c8549efd886ec655527d4643ae250e6a646e433376a862b046c959da7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4de0497063ee60d58a519755937354e3d48500d5942636473d82ac662997387c = $this->env->getExtension("native_profiler");
        $__internal_4de0497063ee60d58a519755937354e3d48500d5942636473d82ac662997387c->enter($__internal_4de0497063ee60d58a519755937354e3d48500d5942636473d82ac662997387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "404 not found")) : ("404 not found")), "html", null, true);
        echo "
";
        
        $__internal_4de0497063ee60d58a519755937354e3d48500d5942636473d82ac662997387c->leave($__internal_4de0497063ee60d58a519755937354e3d48500d5942636473d82ac662997387c_prof);

    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        $__internal_23ad61574ff7ef513a255d9af25399a85e87666c8f75a40bb6414448939f9885 = $this->env->getExtension("native_profiler");
        $__internal_23ad61574ff7ef513a255d9af25399a85e87666c8f75a40bb6414448939f9885->enter($__internal_23ad61574ff7ef513a255d9af25399a85e87666c8f75a40bb6414448939f9885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "    <div class=\"row\">
        <div class=\"large-12 columns\">

        ";
        // line 14
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method") == "/styleguide")) {
            // line 15
            echo "            ";
            echo twig_include($this->env, $context, "styleguide.twig");
            echo "
        ";
        } else {
            // line 17
            echo "            <h1>";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "404 not found")) : ("404 not found")), "html", null, true);
            echo "</h1>

            ";
            // line 19
            if ($this->env->getExtension('Bolt')->fields($this->env, (isset($context["record"]) ? $context["record"] : null))) {
                // line 20
                echo "                ";
                echo $this->env->getExtension('Bolt')->fields($this->env, (isset($context["record"]) ? $context["record"] : null));
                echo "
            ";
            } else {
                // line 22
                echo "                <p>
                    The requested page was not found.
                </p>

                <div class=\"primary callout\" data-closable>
                    <h5>Add a Blocks record with slug '404-not-found' to customize this message. </h5>
                    <p>If it's not showing up here, doublecheck that the <tt>slug</tt> is correct, and that the Block is published.</p>
                    <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
            }
            // line 34
            echo "
        ";
        }
        // line 36
        echo "
        </div>
    </div>

";
        
        $__internal_23ad61574ff7ef513a255d9af25399a85e87666c8f75a40bb6414448939f9885->leave($__internal_23ad61574ff7ef513a255d9af25399a85e87666c8f75a40bb6414448939f9885_prof);

    }

    public function getTemplateName()
    {
        return "notfound.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  103 => 34,  89 => 22,  83 => 20,  81 => 19,  75 => 17,  69 => 15,  66 => 14,  61 => 10,  55 => 9,  45 => 6,  39 => 5,  32 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/_master.twig' %}*/
/* */
/* {% setcontent record = 'blocks/404-not-found' %}*/
/* */
/* {% block title %}*/
/*     {{ record.title|default('404 not found') }}*/
/* {% endblock title %}*/
/* */
/* {% block main %}*/
/*     <div class="row">*/
/*         <div class="large-12 columns">*/
/* */
/*         {# special case: See if we actually want the Styleguide. #}*/
/*         {% if app.request.server.get('REQUEST_URI') == '/styleguide' %}*/
/*             {{ include('styleguide.twig') }}*/
/*         {% else %}*/
/*             <h1>{{ record.title|default('404 not found') }}</h1>*/
/* */
/*             {% if fields(record) %}*/
/*                 {{ fields(record) }}*/
/*             {% else %}*/
/*                 <p>*/
/*                     The requested page was not found.*/
/*                 </p>*/
/* */
/*                 <div class="primary callout" data-closable>*/
/*                     <h5>Add a Blocks record with slug '404-not-found' to customize this message. </h5>*/
/*                     <p>If it's not showing up here, doublecheck that the <tt>slug</tt> is correct, and that the Block is published.</p>*/
/*                     <button class="close-button" aria-label="Dismiss alert" type="button" data-close>*/
/*                         <span aria-hidden="true">&times;</span>*/
/*                     </button>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock main %}*/
