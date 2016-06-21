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
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'bottomincludes' => array($this, 'block_bottomincludes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6b5f74ba8a74c68c925636fcb551c6c84f51a573facfcd95f93f03b701c6b8b = $this->env->getExtension("native_profiler");
        $__internal_b6b5f74ba8a74c68c925636fcb551c6c84f51a573facfcd95f93f03b701c6b8b->enter($__internal_b6b5f74ba8a74c68c925636fcb551c6c84f51a573facfcd95f93f03b701c6b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_master.twig"));

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
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "    

    <!-- Main Content -->    
    ";
        // line 45
        $this->displayBlock('main', $context, $blocks);
        // line 47
        echo "
    <hr>

    ";
        // line 50
        echo twig_include($this->env, $context, "partials/_footer.twig");
        echo "

    ";
        // line 52
        $this->displayBlock('bottomincludes', $context, $blocks);
        // line 54
        echo "
</body>

</html>";
        
        $__internal_b6b5f74ba8a74c68c925636fcb551c6c84f51a573facfcd95f93f03b701c6b8b->leave($__internal_b6b5f74ba8a74c68c925636fcb551c6c84f51a573facfcd95f93f03b701c6b8b_prof);

    }

    // line 20
    public function block_headincludes($context, array $blocks = array())
    {
        $__internal_755cb5280cf35b5c6c41cfecbfdcc22fc5258800444f01b939718878417582c9 = $this->env->getExtension("native_profiler");
        $__internal_755cb5280cf35b5c6c41cfecbfdcc22fc5258800444f01b939718878417582c9->enter($__internal_755cb5280cf35b5c6c41cfecbfdcc22fc5258800444f01b939718878417582c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headincludes"));

        // line 21
        echo "    ";
        
        $__internal_755cb5280cf35b5c6c41cfecbfdcc22fc5258800444f01b939718878417582c9->leave($__internal_755cb5280cf35b5c6c41cfecbfdcc22fc5258800444f01b939718878417582c9_prof);

    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        $__internal_b61d8c1e3ed1449ccc6d76b839b27b1a6dfd918572a6685c731754ec113dc1e7 = $this->env->getExtension("native_profiler");
        $__internal_b61d8c1e3ed1449ccc6d76b839b27b1a6dfd918572a6685c731754ec113dc1e7->enter($__internal_b61d8c1e3ed1449ccc6d76b839b27b1a6dfd918572a6685c731754ec113dc1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 41
        echo "    ";
        
        $__internal_b61d8c1e3ed1449ccc6d76b839b27b1a6dfd918572a6685c731754ec113dc1e7->leave($__internal_b61d8c1e3ed1449ccc6d76b839b27b1a6dfd918572a6685c731754ec113dc1e7_prof);

    }

    // line 45
    public function block_main($context, array $blocks = array())
    {
        $__internal_36ee9f3b3b2f078e81272eb7816b67adcea386123cd4f559c4e69eea4056d0a8 = $this->env->getExtension("native_profiler");
        $__internal_36ee9f3b3b2f078e81272eb7816b67adcea386123cd4f559c4e69eea4056d0a8->enter($__internal_36ee9f3b3b2f078e81272eb7816b67adcea386123cd4f559c4e69eea4056d0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 46
        echo "    ";
        
        $__internal_36ee9f3b3b2f078e81272eb7816b67adcea386123cd4f559c4e69eea4056d0a8->leave($__internal_36ee9f3b3b2f078e81272eb7816b67adcea386123cd4f559c4e69eea4056d0a8_prof);

    }

    // line 52
    public function block_bottomincludes($context, array $blocks = array())
    {
        $__internal_87f104c07096070ddc3165c71cf81bba12a73ef4be78677dd6e7746ee3db76d2 = $this->env->getExtension("native_profiler");
        $__internal_87f104c07096070ddc3165c71cf81bba12a73ef4be78677dd6e7746ee3db76d2->enter($__internal_87f104c07096070ddc3165c71cf81bba12a73ef4be78677dd6e7746ee3db76d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottomincludes"));

        // line 53
        echo "    ";
        
        $__internal_87f104c07096070ddc3165c71cf81bba12a73ef4be78677dd6e7746ee3db76d2->leave($__internal_87f104c07096070ddc3165c71cf81bba12a73ef4be78677dd6e7746ee3db76d2_prof);

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
        return array (  167 => 53,  161 => 52,  154 => 46,  148 => 45,  141 => 41,  135 => 40,  128 => 21,  122 => 20,  112 => 54,  110 => 52,  105 => 50,  100 => 47,  98 => 45,  93 => 42,  91 => 40,  87 => 39,  68 => 22,  66 => 20,  61 => 18,  57 => 17,  53 => 15,  48 => 14,  46 => 13,  41 => 12,  39 => 11,  29 => 2,  26 => 1,);
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
/*     {% block header %}*/
/*     {% endblock %}*/
/*     */
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
