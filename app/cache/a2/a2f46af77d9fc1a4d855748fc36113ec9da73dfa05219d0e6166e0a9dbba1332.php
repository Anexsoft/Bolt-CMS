<?php

/* partials/_master.twig */
class __TwigTemplate_83aec6323f29e5b4a46842e5c634cf0495f3157280b11cfc1239ef5523bf4ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headincludes' => array($this, 'block_headincludes'),
            'main' => array($this, 'block_main'),
            'bottomincludes' => array($this, 'block_bottomincludes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_537137a2553789cb059a9bcf6b685f1fc570e1ca46d434cf30732f1c5bfaca94 = $this->env->getExtension("native_profiler");
        $__internal_537137a2553789cb059a9bcf6b685f1fc570e1ca46d434cf30732f1c5bfaca94->enter($__internal_537137a2553789cb059a9bcf6b685f1fc570e1ca46d434cf30732f1c5bfaca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_master.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmlLang(), "html", null, true);
        echo "\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 11
        echo "    <title>";
        // line 12
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        // line 14
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 15
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "assets/css/clean-blog.min.css\">

    ";
        // line 20
        $this->displayBlock('headincludes', $context, $blocks);
        // line 22
        echo "
    <!-- Custom Fonts -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    ";
        // line 39
        echo twig_include($this->env, $context, "partials/_menu.twig");
        echo "

    ";
        // line 41
        echo twig_include($this->env, $context, "partials/_header.twig");
        echo "

    <!-- Main Content -->    
    ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 46
        echo "
    <hr>

    ";
        // line 49
        echo twig_include($this->env, $context, "partials/_footer.twig");
        echo "

    ";
        // line 51
        $this->displayBlock('bottomincludes', $context, $blocks);
        // line 53
        echo "
</body>

</html>";
        
        $__internal_537137a2553789cb059a9bcf6b685f1fc570e1ca46d434cf30732f1c5bfaca94->leave($__internal_537137a2553789cb059a9bcf6b685f1fc570e1ca46d434cf30732f1c5bfaca94_prof);

    }

    // line 20
    public function block_headincludes($context, array $blocks = array())
    {
        $__internal_08eaad0c526a55b6c908975c5ee0648784d0173172be8d8b6ba7fc9c63f497d2 = $this->env->getExtension("native_profiler");
        $__internal_08eaad0c526a55b6c908975c5ee0648784d0173172be8d8b6ba7fc9c63f497d2->enter($__internal_08eaad0c526a55b6c908975c5ee0648784d0173172be8d8b6ba7fc9c63f497d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headincludes"));

        // line 21
        echo "    ";
        
        $__internal_08eaad0c526a55b6c908975c5ee0648784d0173172be8d8b6ba7fc9c63f497d2->leave($__internal_08eaad0c526a55b6c908975c5ee0648784d0173172be8d8b6ba7fc9c63f497d2_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_3f232fff3f6792d961b76bba24b891ed201efaa8a341645d376595e5d8729cc4 = $this->env->getExtension("native_profiler");
        $__internal_3f232fff3f6792d961b76bba24b891ed201efaa8a341645d376595e5d8729cc4->enter($__internal_3f232fff3f6792d961b76bba24b891ed201efaa8a341645d376595e5d8729cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 45
        echo "    ";
        
        $__internal_3f232fff3f6792d961b76bba24b891ed201efaa8a341645d376595e5d8729cc4->leave($__internal_3f232fff3f6792d961b76bba24b891ed201efaa8a341645d376595e5d8729cc4_prof);

    }

    // line 51
    public function block_bottomincludes($context, array $blocks = array())
    {
        $__internal_504ec5da7389d9ff7e3aaaa30d01deb5ea886b6f736b7e8e27b7de57796be132 = $this->env->getExtension("native_profiler");
        $__internal_504ec5da7389d9ff7e3aaaa30d01deb5ea886b6f736b7e8e27b7de57796be132->enter($__internal_504ec5da7389d9ff7e3aaaa30d01deb5ea886b6f736b7e8e27b7de57796be132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottomincludes"));

        // line 52
        echo "    ";
        
        $__internal_504ec5da7389d9ff7e3aaaa30d01deb5ea886b6f736b7e8e27b7de57796be132->leave($__internal_504ec5da7389d9ff7e3aaaa30d01deb5ea886b6f736b7e8e27b7de57796be132_prof);

    }

    public function getTemplateName()
    {
        return "partials/_master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 52,  147 => 51,  140 => 45,  134 => 44,  127 => 21,  121 => 20,  111 => 53,  109 => 51,  104 => 49,  99 => 46,  97 => 44,  91 => 41,  86 => 39,  67 => 22,  65 => 20,  60 => 18,  56 => 17,  52 => 15,  47 => 14,  45 => 13,  40 => 12,  38 => 11,  28 => 2,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="no-js" lang="{{ htmllang() }}">*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     {# make sure we always display a proper title: The record's title if there is one, appended with the*/
/*        sitename. If there is no title, we append the sitename with the payoff, if there is one. #}*/
/*     <title>*/
/*         {%- if record.title is defined %}{{ record.title|striptags }} | {% endif -%}*/
/*             {{ app.config.get('general/sitename') -}}*/
/*         {% if record.title is not defined and app.config.get('general/payoff') %} | {{ app.config.get('general/payoff') }}{% endif -%}*/
/*     </title>*/
/* */
/*     <link rel="stylesheet" href="{{ paths.theme }}assets/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ paths.theme }}assets/css/clean-blog.min.css">*/
/* */
/*     {% block headincludes %}*/
/*     {% endblock headincludes %}*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/*     <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     {{ include('partials/_menu.twig') }}*/
/* */
/*     {{ include('partials/_header.twig') }}*/
/* */
/*     <!-- Main Content -->    */
/*     {% block main %}*/
/*     {% endblock main %}*/
/* */
/*     <hr>*/
/* */
/*     {{ include('partials/_footer.twig') }}*/
/* */
/*     {% block bottomincludes %}*/
/*     {% endblock bottomincludes %}*/
/* */
/* </body>*/
/* */
/* </html>*/
