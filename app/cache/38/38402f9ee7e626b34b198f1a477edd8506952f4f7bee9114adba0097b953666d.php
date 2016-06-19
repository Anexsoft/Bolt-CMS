<?php

/* @bolt/_base/_page-no_nav.twig */
class __TwigTemplate_3705086ae11aefa39ff80a02fb893b9365b4a9af8d3ec6dd16cacc688b2f19fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("@bolt/_base/_page.twig", "@bolt/_base/_page-no_nav.twig", 9);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3965c3cde168f75642cff60ee1fcfbf3b9da3862e0fa3b0273279ad866f0df2f = $this->env->getExtension("native_profiler");
        $__internal_3965c3cde168f75642cff60ee1fcfbf3b9da3862e0fa3b0273279ad866f0df2f->enter($__internal_3965c3cde168f75642cff60ee1fcfbf3b9da3862e0fa3b0273279ad866f0df2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_page-no_nav.twig"));

        // line 11
        $context["page_bodyclass"] = "login";
        // line 13
        $context["page_hasnav"] = false;
        // line 15
        $context["page_nav"] = "";
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3965c3cde168f75642cff60ee1fcfbf3b9da3862e0fa3b0273279ad866f0df2f->leave($__internal_3965c3cde168f75642cff60ee1fcfbf3b9da3862e0fa3b0273279ad866f0df2f_prof);

    }

    // line 17
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_507e9eeaf07b3b661076c490e8cbcc771c223355e8c0cca08a6de4ae35a197da = $this->env->getExtension("native_profiler");
        $__internal_507e9eeaf07b3b661076c490e8cbcc771c223355e8c0cca08a6de4ae35a197da->enter($__internal_507e9eeaf07b3b661076c490e8cbcc771c223355e8c0cca08a6de4ae35a197da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        // line 18
        echo "
    <div class=\"container\">
        <div class=\"view-site\">
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-external-link-square\"></i> ";
        echo $this->env->getExtension('Bolt')->trans("general.phrase.view-site");
        echo "</a>
        </div>

        <div class=\"row\">
            <div class=\"";
        // line 25
        echo twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter((isset($context["form_class"]) ? $context["form_class"] : null), "col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")) : ("col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")), "html", null, true);
        echo "\">

                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bolt-logo.png", "bolt"), "html", null, true);
        echo "\" width=\"150\" height=\"62\" alt=\"Bolt\" class=\"logo\">

                ";
        // line 29
        echo $this->env->getExtension('Bolt')->widgets("login_top", "backend");
        echo "

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 33
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "
                        ";
        // line 34
        $this->displayBlock('page_main', $context, $blocks);
        // line 35
        echo "                    </div>
                </div>

                ";
        // line 38
        echo $this->env->getExtension('Bolt')->widgets("login_middle", "backend");
        echo "

                ";
        // line 40
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "randomquote", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "randomquote", array()), false)) : (false))) {
            // line 41
            echo "                    <blockquote class=\"quote\">";
            echo $this->env->getExtension('Bolt')->randomQuote();
            echo "</blockquote>
                ";
        }
        // line 43
        echo "
                ";
        // line 44
        echo $this->env->getExtension('Bolt')->widgets("login_bottom", "backend");
        echo "

            </div>
        </div>
    </div>

";
        
        $__internal_507e9eeaf07b3b661076c490e8cbcc771c223355e8c0cca08a6de4ae35a197da->leave($__internal_507e9eeaf07b3b661076c490e8cbcc771c223355e8c0cca08a6de4ae35a197da_prof);

    }

    // line 34
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_da164a0d127aa210f96161ddca17f9ee73eaab948d2c861bfdca6bc18abd31d8 = $this->env->getExtension("native_profiler");
        $__internal_da164a0d127aa210f96161ddca17f9ee73eaab948d2c861bfdca6bc18abd31d8->enter($__internal_da164a0d127aa210f96161ddca17f9ee73eaab948d2c861bfdca6bc18abd31d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        echo "[PAGE_MAIN]";
        
        $__internal_da164a0d127aa210f96161ddca17f9ee73eaab948d2c861bfdca6bc18abd31d8->leave($__internal_da164a0d127aa210f96161ddca17f9ee73eaab948d2c861bfdca6bc18abd31d8_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page-no_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  106 => 44,  103 => 43,  97 => 41,  95 => 40,  90 => 38,  85 => 35,  83 => 34,  79 => 33,  72 => 29,  67 => 27,  62 => 25,  53 => 21,  48 => 18,  42 => 17,  35 => 9,  33 => 15,  31 => 13,  29 => 11,  11 => 9,);
    }
}
/* {##*/
/*  # HTML page template for pages without navigation*/
/*  #*/
/*  # Blocks: page_main:     content*/
/*  #         page_title:    used as html title*/
/*  #         page_subtitle: used as html title (optional)*/
/*  #         page_script:   script added after the body tag (script tags needed!)*/
/*  #}*/
/* {% extends '@bolt/_base/_page.twig' %}*/
/* */
/* {% set page_bodyclass = 'login' %}*/
/* */
/* {% set page_hasnav = false %}*/
/* */
/* {% set page_nav = '' %}*/
/* */
/* {% block page_plain %}*/
/* */
/*     <div class="container">*/
/*         <div class="view-site">*/
/*             <a href="{{ paths.root }}" target="_blank"><i class="fa fa-fw fa-external-link-square"></i> {{ __('general.phrase.view-site') }}</a>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="{{ form_class|default('col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2') }}">*/
/* */
/*                 <img src="{{ asset('img/bolt-logo.png', 'bolt') }}" width="150" height="62" alt="Bolt" class="logo">*/
/* */
/*                 {{ widgets('login_top', 'backend') }}*/
/* */
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                         {{ include('@bolt/_sub/_messages.twig') }}*/
/*                         {% block page_main %}[PAGE_MAIN]{% endblock page_main %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {{ widgets('login_middle', 'backend') }}*/
/* */
/*                 {% if context.randomquote|default(false) %}*/
/*                     <blockquote class="quote">{{ randomquote() }}</blockquote>*/
/*                 {% endif %}*/
/* */
/*                 {{ widgets('login_bottom', 'backend') }}*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock page_plain %}*/
/* */
