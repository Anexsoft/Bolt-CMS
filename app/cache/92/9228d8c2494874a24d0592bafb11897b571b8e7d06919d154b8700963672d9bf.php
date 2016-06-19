<?php

/* @bolt/_base/_page-nav.twig */
class __TwigTemplate_00dee96435a0ae98c1fbba0af1b3fc118aa7af52fb5aecb89194e133438a757b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("@bolt/_base/_page.twig", "@bolt/_base/_page-nav.twig", 10);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
            'page_main_extra_content' => array($this, 'block_page_main_extra_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7097cb91106752163a0576135fe1f0c66450416c06f26aaef49ecdde316b68d = $this->env->getExtension("native_profiler");
        $__internal_e7097cb91106752163a0576135fe1f0c66450416c06f26aaef49ecdde316b68d->enter($__internal_e7097cb91106752163a0576135fe1f0c66450416c06f26aaef49ecdde316b68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_page-nav.twig"));

        // line 12
        $context["page_bodyclass"] = "";
        // line 14
        $context["page_hasnav"] = true;
        // line 16
        $context["page_nav"] = _twig_default_filter($this->renderBlock("page_nav", $context, $blocks), "NO NAV");
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7097cb91106752163a0576135fe1f0c66450416c06f26aaef49ecdde316b68d->leave($__internal_e7097cb91106752163a0576135fe1f0c66450416c06f26aaef49ecdde316b68d_prof);

    }

    // line 18
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_c9caf31d0a16c66ffdb18f04efea015e9cef1040791fa49f9f62c6c1ec0b1780 = $this->env->getExtension("native_profiler");
        $__internal_c9caf31d0a16c66ffdb18f04efea015e9cef1040791fa49f9f62c6c1ec0b1780->enter($__internal_c9caf31d0a16c66ffdb18f04efea015e9cef1040791fa49f9f62c6c1ec0b1780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("omnisearch.placeholder", $this->env->getExtension('Bolt')->trans("general.phrase.find")), "html", null, true);
        echo "

    <div id=\"navpage-wrapper\"";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
            echo " class=\"nav-secondary-collapsed nav-secondary-collapsed-hoverable\"";
        }
        echo ">
        <nav id=\"navpage-primary\" class=\"navbar navbar-static-top navbar-inverse navbar-bolt\">
            <div class=\"container-fluid\">
                ";
        // line 24
        echo twig_include($this->env, $context, "@bolt/_nav/_primary.twig");
        echo "
            </div>
        </nav>

        <nav id=\"navpage-secondary\" class=\"navbar-default navbar-static-side\">
            ";
        // line 29
        echo twig_include($this->env, $context, "@bolt/_nav/_secondary.twig");
        echo "
            ";
        // line 31
        echo "            ";
        echo twig_include($this->env, $context, "@bolt/_nav/_footer.twig");
        echo "
        </nav>

        <div id=\"navpage-content\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h1 class=\"page-header\">
                        ";
        // line 38
        if (twig_test_empty($this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 39
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo "</strong>
                        ";
        } else {
            // line 41
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo " »</strong>
                            <i style=\"font-style: normal;\">";
            // line 42
            $this->displayBlock("page_subtitle", $context, $blocks);
            echo "</i>
                        ";
        }
        // line 44
        echo "
                        ";
        // line 46
        echo "                        ";
        if (array_key_exists("pager", $context)) {
            // line 47
            echo "                            ";
            $context["pager_ct"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), array(), "array");
            // line 48
            echo "                            ";
            if (((isset($context["pager_ct"]) ? $context["pager_ct"] : null) && ($this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "totalpages", array()) > 1))) {
                // line 49
                echo "                                <span>
                                    ";
                // line 50
                echo $this->env->getExtension('Bolt')->trans("general.phrase.showing");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "showing_from", array()), "html", null, true);
                echo " -
                                    ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "showing_to", array()), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Bolt')->trans("general.phrase.of");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "count", array()), "html", null, true);
                echo "
                                </span>
                            ";
            }
            // line 54
            echo "                        ";
        }
        // line 55
        echo "
                    </h1>
                </div>
            </div>

            ";
        // line 60
        echo $this->env->getExtension('Bolt')->widgets("below_header", "backend");
        echo "

            ";
        // line 62
        $this->displayBlock('messages', $context, $blocks);
        // line 65
        echo "
            ";
        // line 66
        $this->displayBlock('page_main', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        echo $this->env->getExtension('Bolt')->widgets("footer", "backend");
        echo "

        </div>

        ";
        // line 72
        $this->displayBlock('page_main_extra_content', $context, $blocks);
        // line 74
        echo "
    </div>


";
        
        $__internal_c9caf31d0a16c66ffdb18f04efea015e9cef1040791fa49f9f62c6c1ec0b1780->leave($__internal_c9caf31d0a16c66ffdb18f04efea015e9cef1040791fa49f9f62c6c1ec0b1780_prof);

    }

    // line 62
    public function block_messages($context, array $blocks = array())
    {
        $__internal_c0764fd483b5857dc3955f543751be06e0285c0178099ce207a7a068fc33ff93 = $this->env->getExtension("native_profiler");
        $__internal_c0764fd483b5857dc3955f543751be06e0285c0178099ce207a7a068fc33ff93->enter($__internal_c0764fd483b5857dc3955f543751be06e0285c0178099ce207a7a068fc33ff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 63
        echo "                ";
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig", array("wrapper" => true));
        echo "
            ";
        
        $__internal_c0764fd483b5857dc3955f543751be06e0285c0178099ce207a7a068fc33ff93->leave($__internal_c0764fd483b5857dc3955f543751be06e0285c0178099ce207a7a068fc33ff93_prof);

    }

    // line 66
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_d07cee5ffe38268c66051d69e06f87588504298f0981b8353ee361e0440b7b44 = $this->env->getExtension("native_profiler");
        $__internal_d07cee5ffe38268c66051d69e06f87588504298f0981b8353ee361e0440b7b44->enter($__internal_d07cee5ffe38268c66051d69e06f87588504298f0981b8353ee361e0440b7b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        echo "[PAGE_MAIN]";
        
        $__internal_d07cee5ffe38268c66051d69e06f87588504298f0981b8353ee361e0440b7b44->leave($__internal_d07cee5ffe38268c66051d69e06f87588504298f0981b8353ee361e0440b7b44_prof);

    }

    // line 72
    public function block_page_main_extra_content($context, array $blocks = array())
    {
        $__internal_58964b273e0f9104f5c81e2338f08be49433096463d340411f708d1473d1fed7 = $this->env->getExtension("native_profiler");
        $__internal_58964b273e0f9104f5c81e2338f08be49433096463d340411f708d1473d1fed7->enter($__internal_58964b273e0f9104f5c81e2338f08be49433096463d340411f708d1473d1fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main_extra_content"));

        // line 73
        echo "        ";
        
        $__internal_58964b273e0f9104f5c81e2338f08be49433096463d340411f708d1473d1fed7->leave($__internal_58964b273e0f9104f5c81e2338f08be49433096463d340411f708d1473d1fed7_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 73,  209 => 72,  197 => 66,  187 => 63,  181 => 62,  170 => 74,  168 => 72,  161 => 68,  158 => 67,  156 => 66,  153 => 65,  151 => 62,  146 => 60,  139 => 55,  136 => 54,  126 => 51,  120 => 50,  117 => 49,  114 => 48,  111 => 47,  108 => 46,  105 => 44,  100 => 42,  95 => 41,  89 => 39,  87 => 38,  76 => 31,  72 => 29,  64 => 24,  56 => 21,  50 => 19,  44 => 18,  37 => 10,  35 => 16,  33 => 14,  31 => 12,  11 => 10,);
    }
}
/* {##*/
/*  # HTML page template for pages with navigation*/
/*  #*/
/*  # Blocks: page_nav:      Navigation path, like: "Dashboard", "Settings/Configuration", "Content/*", ...*/
/*  #         page_main:     content*/
/*  #         page_title:    used as html title*/
/*  #         page_subtitle: used as html title (optional)*/
/*  #         page_script:   script added after the body tag (script tags needed!)*/
/*  #}*/
/* {% extends '@bolt/_base/_page.twig' %}*/
/* */
/* {% set page_bodyclass = '' %}*/
/* */
/* {% set page_hasnav = true %}*/
/* */
/* {% set page_nav = block('page_nav')|default('NO NAV') %}*/
/* */
/* {% block page_plain %}*/
/*     {{ data('omnisearch.placeholder', __('general.phrase.find')) }}*/
/* */
/*     <div id="navpage-wrapper"{% if app.request.cookies.get('sidebar') %} class="nav-secondary-collapsed nav-secondary-collapsed-hoverable"{% endif %}>*/
/*         <nav id="navpage-primary" class="navbar navbar-static-top navbar-inverse navbar-bolt">*/
/*             <div class="container-fluid">*/
/*                 {{ include('@bolt/_nav/_primary.twig') }}*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <nav id="navpage-secondary" class="navbar-default navbar-static-side">*/
/*             {{ include('@bolt/_nav/_secondary.twig') }}*/
/*             {# Note: We include the footer here, because of z-index issues otherwise. #}*/
/*             {{ include('@bolt/_nav/_footer.twig') }}*/
/*         </nav>*/
/* */
/*         <div id="navpage-content" class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     <h1 class="page-header">*/
/*                         {% if block('page_subtitle') is empty %}*/
/*                             <strong>{{ block('page_title') }}</strong>*/
/*                         {% else %}*/
/*                             <strong>{{ block('page_title') }} »</strong>*/
/*                             <i style="font-style: normal;">{{ block('page_subtitle') }}</i>*/
/*                         {% endif %}*/
/* */
/*                         {# optional "showing 1-X of Y" for overview pages. #}*/
/*                         {% if pager is defined %}*/
/*                             {% set pager_ct = pager[context.contenttype.slug] %}*/
/*                             {% if pager_ct and pager_ct.totalpages > 1 %}*/
/*                                 <span>*/
/*                                     {{ __('general.phrase.showing') }} {{ pager_ct.showing_from }} -*/
/*                                     {{ pager_ct.showing_to }} {{ __('general.phrase.of') }} {{ pager_ct.count }}*/
/*                                 </span>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                     </h1>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {{ widgets('below_header', 'backend') }}*/
/* */
/*             {% block messages %}*/
/*                 {{ include('@bolt/_sub/_messages.twig', {'wrapper': true}) }}*/
/*             {% endblock messages %}*/
/* */
/*             {% block page_main %}[PAGE_MAIN]{% endblock page_main %}*/
/* */
/*             {{ widgets('footer', 'backend') }}*/
/* */
/*         </div>*/
/* */
/*         {% block page_main_extra_content %}*/
/*         {% endblock %}*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock page_plain %}*/
/* */
