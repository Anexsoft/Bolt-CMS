<?php

/* @bolt/_base/_page.twig */
class __TwigTemplate_bbefc424eccc15898826cea21e3b508cafa581417085b66d5fac1c1b2d261a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_script' => array($this, 'block_page_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e493bcd273bdf5e1921f47587e1ab92c4ac62be98e25886157f2783fc031ad53 = $this->env->getExtension("native_profiler");
        $__internal_e493bcd273bdf5e1921f47587e1ab92c4ac62be98e25886157f2783fc031ad53->enter($__internal_e493bcd273bdf5e1921f47587e1ab92c4ac62be98e25886157f2783fc031ad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_page.twig"));

        // line 12
        ob_start();
        // line 13
        echo "
";
        // line 14
        $context["page_locale_long"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array());
        // line 15
        $context["page_locale_short"] = twig_slice($this->env, (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null), 0, 2);
        // line 16
        $context["page_timezone_offset"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "timezone_offset", array());
        // line 17
        echo "
";
        // line 18
        if (twig_test_empty($this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 19
            echo "    ";
            $context["page_title"] = $this->renderBlock("page_title", $context, $blocks);
        } else {
            // line 21
            echo "    ";
            $context["page_title"] = (($this->renderBlock("page_title", $context, $blocks) . " » ") . $this->renderBlock("page_subtitle", $context, $blocks));
        }
        // line 23
        echo "
";
        // line 25
        $context["page_scripts_inc"] = array(0 => "js/lib.js");
        // line 28
        echo "
";
        // line 30
        $context["localepath"] = "js/locale/datepicker/";
        // line 31
        if ($this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js"))) {
            // line 32
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js")));
        } elseif (((        // line 33
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null) != "en") && $this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")))) {
            // line 34
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")));
        }
        // line 36
        echo "
";
        // line 38
        $context["localepath"] = "js/locale/moment/";
        // line 39
        if ($this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js"))) {
            // line 40
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js")));
        } elseif (((        // line 41
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null) != "en") && $this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")))) {
            // line 42
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")));
        }
        // line 44
        echo "
";
        // line 46
        $context["localepath"] = "js/locale/select2/";
        // line 47
        if ($this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js"))) {
            // line 48
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js")));
        } elseif (((        // line 49
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null) != "en") && $this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")))) {
            // line 50
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")));
        }
        // line 52
        echo "
";
        // line 54
        $context["localepath"] = "js/locale/ckeditor/";
        // line 55
        $context["page_locale_long_bcp47"] = twig_lower_filter($this->env, twig_replace_filter((isset($context["page_locale_long"]) ? $context["page_locale_long"] : null), "_", "-"));
        // line 56
        if ($this->env->getExtension('Bolt')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long_bcp47"]) ? $context["page_locale_long_bcp47"] : null)) . ".js"))) {
            // line 57
            echo "    ";
            $context["ckeditor_lang"] = (isset($context["page_locale_long_bcp47"]) ? $context["page_locale_long_bcp47"] : null);
        } else {
            // line 59
            echo "    ";
            $context["ckeditor_lang"] = (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null);
        }
        // line 61
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 64
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null), "html", null, true);
        echo "\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>";
        // line 71
        echo trim(strip_tags((isset($context["page_title"]) ? $context["page_title"] : null)));
        echo " – ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/name"), "method"), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/lib.css", "bolt"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bolt.css", "bolt"), "html", null, true);
        echo "\">

    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 77
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["script"], "bolt"), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/branding/favicon"), "method")) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/branding/favicon"), "method")) : ($this->env->getExtension('asset')->getAssetUrl("img/favicon-bolt.ico", "bolt"))), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/branding/apple-touch-icon"), "method")) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/branding/apple-touch-icon"), "method")) : ($this->env->getExtension('asset')->getAssetUrl("img/apple-touch-icon.png", "bolt"))), "html", null, true);
        echo "\">
    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "72x72", 1 => "114x114", 2 => "144x144"));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 83
            echo "        <link rel=\"apple-touch-icon\" sizes=\"";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => ("general/branding/apple-touch-icon-" . $context["size"])), "method")) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => ("general/branding/apple-touch-icon-" . $context["size"])), "method")) : ($this->env->getExtension('asset')->getAssetUrl((("img/apple-touch-icon-" . $context["size"]) . ".png"), "bolt"))), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "</head>

<body";
        // line 87
        if ((isset($context["page_bodyclass"]) ? $context["page_bodyclass"] : null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["page_bodyclass"]) ? $context["page_bodyclass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">

    ";
        // line 89
        $this->displayBlock('page_plain', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $context["bconfig"] = array("locale" => array("short" =>         // line 93
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null), "long" =>         // line 94
(isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)), "timezone" => array("offset" =>         // line 97
(isset($context["page_timezone_offset"]) ? $context["page_timezone_offset"] : null)), "buid" => $this->env->getExtension('Bolt')->buid(), "paths" => array("bolt" => $this->getAttribute(        // line 101
(isset($context["paths"]) ? $context["paths"] : null), "bolt", array()), "async" => $this->getAttribute(        // line 102
(isset($context["paths"]) ? $context["paths"] : null), "async", array()), "app" => $this->getAttribute(        // line 103
(isset($context["paths"]) ? $context["paths"] : null), "app", array()), "root" => $this->getAttribute(        // line 104
(isset($context["paths"]) ? $context["paths"] : null), "root", array()), "origin" => $this->getAttribute(        // line 105
(isset($context["paths"]) ? $context["paths"] : null), "rooturl", array())), "uploadConfig" => array("maxSize" => $this->getAttribute($this->getAttribute(        // line 108
(isset($context["app"]) ? $context["app"] : null), "filepermissions", array(), "array"), "getMaxUploadSize", array(), "method"), "maxSizeNice" => $this->getAttribute($this->getAttribute(        // line 109
(isset($context["app"]) ? $context["app"] : null), "filepermissions", array(), "array"), "getMaxUploadSizeNice", array(), "method")), "ckeditor" => array("lang" =>         // line 112
(isset($context["ckeditor_lang"]) ? $context["ckeditor_lang"] : null), "images" => (0 + $this->getAttribute(        // line 113
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/images"), "method")), "styles" => (0 + $this->getAttribute(        // line 114
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/styles"), "method")), "tables" => (0 + $this->getAttribute(        // line 115
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/tables"), "method")), "anchor" => (0 + $this->getAttribute(        // line 116
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/anchor"), "method")), "fontcolor" => (0 + $this->getAttribute(        // line 117
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/fontcolor"), "method")), "align" => (0 + $this->getAttribute(        // line 118
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/align"), "method")), "subsuper" => (0 + $this->getAttribute(        // line 119
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/subsuper"), "method")), "embed" => (0 + $this->getAttribute(        // line 120
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/embed"), "method")), "blockquote" => (0 + $this->getAttribute(        // line 121
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/blockquote"), "method")), "ruler" => (0 + $this->getAttribute(        // line 122
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ruler"), "method")), "strike" => (0 + $this->getAttribute(        // line 123
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/strike"), "method")), "underline" => (0 + $this->getAttribute(        // line 124
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/underline"), "method")), "codesnippet" => (0 + $this->getAttribute(        // line 125
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/codesnippet"), "method")), "specialchar" => (0 + $this->getAttribute(        // line 126
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/specialchar"), "method")), "ck" => ((twig_test_iterable($this->getAttribute(        // line 127
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method"))) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method")) : (false)), "filebrowser" => ((twig_test_iterable($this->getAttribute(        // line 128
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method"))) ? ($this->getAttribute(        // line 129
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method")) : (false))));
        // line 132
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bolt.js", "bolt"), "html", null, true);
        echo "\" data-config=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["bconfig"]) ? $context["bconfig"] : null)), "html", null, true);
        echo "\" data-jsdata=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "jsdata", array())), "html", null, true);
        echo "\"></script>

";
        // line 134
        $this->displayBlock('page_script', $context, $blocks);
        // line 136
        echo "
</body>
</html>
";
        
        $__internal_e493bcd273bdf5e1921f47587e1ab92c4ac62be98e25886157f2783fc031ad53->leave($__internal_e493bcd273bdf5e1921f47587e1ab92c4ac62be98e25886157f2783fc031ad53_prof);

    }

    // line 89
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_f84d2c2b8ff418f51a7a91954791c6e22f86f5b3f112717384df180e8abb7f56 = $this->env->getExtension("native_profiler");
        $__internal_f84d2c2b8ff418f51a7a91954791c6e22f86f5b3f112717384df180e8abb7f56->enter($__internal_f84d2c2b8ff418f51a7a91954791c6e22f86f5b3f112717384df180e8abb7f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        
        $__internal_f84d2c2b8ff418f51a7a91954791c6e22f86f5b3f112717384df180e8abb7f56->leave($__internal_f84d2c2b8ff418f51a7a91954791c6e22f86f5b3f112717384df180e8abb7f56_prof);

    }

    // line 134
    public function block_page_script($context, array $blocks = array())
    {
        $__internal_70f5a5aee906e6b2f78ad7d197c910da550e93251a1d1c55c638b1aa332312fa = $this->env->getExtension("native_profiler");
        $__internal_70f5a5aee906e6b2f78ad7d197c910da550e93251a1d1c55c638b1aa332312fa->enter($__internal_70f5a5aee906e6b2f78ad7d197c910da550e93251a1d1c55c638b1aa332312fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_script"));

        
        $__internal_70f5a5aee906e6b2f78ad7d197c910da550e93251a1d1c55c638b1aa332312fa->leave($__internal_70f5a5aee906e6b2f78ad7d197c910da550e93251a1d1c55c638b1aa332312fa_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 134,  259 => 89,  249 => 136,  247 => 134,  237 => 132,  235 => 129,  234 => 128,  233 => 127,  232 => 126,  231 => 125,  230 => 124,  229 => 123,  228 => 122,  227 => 121,  226 => 120,  225 => 119,  224 => 118,  223 => 117,  222 => 116,  221 => 115,  220 => 114,  219 => 113,  218 => 112,  217 => 109,  216 => 108,  215 => 105,  214 => 104,  213 => 103,  212 => 102,  211 => 101,  210 => 97,  209 => 94,  208 => 93,  207 => 91,  204 => 90,  202 => 89,  193 => 87,  189 => 85,  178 => 83,  174 => 82,  170 => 81,  166 => 80,  163 => 79,  154 => 77,  150 => 76,  145 => 74,  141 => 73,  134 => 71,  125 => 65,  122 => 64,  118 => 61,  114 => 59,  110 => 57,  108 => 56,  106 => 55,  104 => 54,  101 => 52,  97 => 50,  95 => 49,  92 => 48,  90 => 47,  88 => 46,  85 => 44,  81 => 42,  79 => 41,  76 => 40,  74 => 39,  72 => 38,  69 => 36,  65 => 34,  63 => 33,  60 => 32,  58 => 31,  56 => 30,  53 => 28,  51 => 25,  48 => 23,  44 => 21,  40 => 19,  38 => 18,  35 => 17,  33 => 16,  31 => 15,  29 => 14,  26 => 13,  24 => 12,);
    }
}
/* {##*/
/*  # Standard HTML page template*/
/*  #*/
/*  # Dont't use, use "_page-<nav|no_nav|popup>.twig" instead!*/
/*  #*/
/*  # Blocks: page_nav:      Navigation path, like: "Dashboard", "Settings/Configuration", "Content/*", ...*/
/*  #         page_main:     content*/
/*  #         page_title:    used as html title*/
/*  #         page_subtitle: used as html title (optional)*/
/*  #         page_script:   script added after the body tag (script tags needed!)*/
/*  #}*/
/* {%- spaceless %}*/
/* */
/* {% set page_locale_long = app.locale %}*/
/* {% set page_locale_short = page_locale_long|slice(0, 2) %}*/
/* {% set page_timezone_offset = app.timezone_offset %}*/
/* */
/* {% if block('page_subtitle') is empty %}*/
/*     {% set page_title = block('page_title') %}*/
/* {% else %}*/
/*     {% set page_title = block('page_title') ~ ' » ' ~ block('page_subtitle') %}*/
/* {% endif %}*/
/* */
/* {# TODO: Refactor this out. Too much business logic in the template. #}*/
/* {% set page_scripts_inc = [*/
/*     'js/lib.js'*/
/* ] %}*/
/* */
/* {# Add locale include for datepicker #}*/
/* {% set localepath = 'js/locale/datepicker/' %}*/
/* {% if file_exists(paths.viewpath ~ '/' ~ localepath ~ page_locale_long ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_long ~ '.min.js']) %}*/
/* {% elseif page_locale_short != 'en' and file_exists(paths.viewpath ~ '/' ~ localepath ~ page_locale_short ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_short ~ '.min.js']) %}*/
/* {% endif %}*/
/* */
/* {# Add locale include for moment #}*/
/* {% set localepath = 'js/locale/moment/' %}*/
/* {% if file_exists(paths.viewpath ~ '/' ~ localepath ~ page_locale_long ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_long ~ '.min.js']) %}*/
/* {% elseif page_locale_short != 'en' and file_exists(paths.viewpath ~ '/' ~ localepath ~ page_locale_short ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_short ~ '.min.js']) %}*/
/* {% endif %}*/
/* */
/* {# Add locale include for select2 #}*/
/* {% set localepath = 'js/locale/select2/' %}*/
/* {% if file_exists(paths.viewpath ~ '/' ~ localepath ~ page_locale_long ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_long ~ '.min.js']) %}*/
/* {% elseif page_locale_short != 'en' and file_exists(paths.viewpath ~ '/' ~ localepath ~ page_locale_short ~ '.min.js') %}*/
/*     {% set page_scripts_inc = page_scripts_inc|merge([localepath ~ page_locale_short ~ '.min.js']) %}*/
/* {% endif %}*/
/* */
/* {# Determine locale include for ckeditor #}*/
/* {% set localepath = 'js/locale/ckeditor/' %}*/
/* {% set page_locale_long_bcp47 = page_locale_long|replace('_', '-')|lower %}*/
/* {% if file_exists(paths.viewpath ~ '/' ~ localepath ~ page_locale_long_bcp47 ~ '.js') %}*/
/*     {% set ckeditor_lang = page_locale_long_bcp47 %}*/
/* {% else %}*/
/*     {% set ckeditor_lang = page_locale_short %}*/
/* {% endif %}*/
/* */
/* {% endspaceless -%}*/
/* */
/* <!DOCTYPE html>*/
/* <html lang="{{ page_locale_short }}">*/
/* <head>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">*/
/* */
/*     <title>{{ page_title|striptags|trim|raw }} – {{ app.config.get('general/branding/name') }}</title>*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/lib.css', 'bolt') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/bolt.css', 'bolt') }}">*/
/* */
/*     {% for script in page_scripts_inc -%}*/
/*         <script src="{{ asset(script, 'bolt') }}"></script>*/
/*     {% endfor %}*/
/* */
/*     <link rel="shortcut icon" href="{{ config.get('general/branding/favicon') ?: asset('img/favicon-bolt.ico', 'bolt') }}">*/
/*     <link rel="apple-touch-icon" sizes="57x57" href="{{ config.get('general/branding/apple-touch-icon') ?: asset('img/apple-touch-icon.png', 'bolt') }}">*/
/*     {% for size in ['72x72', '114x114', '144x144'] %}*/
/*         <link rel="apple-touch-icon" sizes="{{ size }}" href="{{ config.get('general/branding/apple-touch-icon-' ~ size) ?: asset('img/apple-touch-icon-' ~ size ~ '.png', 'bolt') }}">*/
/*     {% endfor %}*/
/* </head>*/
/* */
/* <body{% if page_bodyclass %} class="{{ page_bodyclass }}"{% endif %}>*/
/* */
/*     {% block page_plain %}{% endblock page_plain %}*/
/* */
/* {% set bconfig = {*/
/*     locale: {*/
/*         short: page_locale_short,*/
/*         long: page_locale_long,*/
/*     },*/
/*     timezone: {*/
/*         offset: page_timezone_offset,*/
/*     },*/
/*     buid: buid(),*/
/*     paths: {*/
/*         bolt:  paths.bolt,*/
/*         async: paths.async,*/
/*         app:   paths.app,*/
/*         root:  paths.root,*/
/*         origin: paths.rooturl*/
/*     },*/
/*     uploadConfig: {*/
/*         maxSize: app['filepermissions'].getMaxUploadSize(),*/
/*         maxSizeNice: app['filepermissions'].getMaxUploadSizeNice(),*/
/*     },*/
/*     ckeditor: {*/
/*         lang:        ckeditor_lang,*/
/*         images:      0 + config.get('general/wysiwyg/images'),*/
/*         styles:      0 + config.get('general/wysiwyg/styles'),*/
/*         tables:      0 + config.get('general/wysiwyg/tables'),*/
/*         anchor:      0 + config.get('general/wysiwyg/anchor'),*/
/*         fontcolor:   0 + config.get('general/wysiwyg/fontcolor'),*/
/*         align:       0 + config.get('general/wysiwyg/align'),*/
/*         subsuper:    0 + config.get('general/wysiwyg/subsuper'),*/
/*         embed:       0 + config.get('general/wysiwyg/embed'),*/
/*         blockquote:  0 + config.get('general/wysiwyg/blockquote'),*/
/*         ruler:       0 + config.get('general/wysiwyg/ruler'),*/
/*         strike:      0 + config.get('general/wysiwyg/strike'),*/
/*         underline:   0 + config.get('general/wysiwyg/underline'),*/
/*         codesnippet: 0 + config.get('general/wysiwyg/codesnippet'),*/
/*         specialchar: 0 + config.get('general/wysiwyg/specialchar'),*/
/*         ck:          (config.get('general/wysiwyg/ck') is iterable) ? config.get('general/wysiwyg/ck') : false,*/
/*         filebrowser: (config.get('general/wysiwyg/filebrowser') is iterable)*/
/*                         ? config.get('general/wysiwyg/filebrowser') : false,*/
/*     },*/
/* } %}*/
/* <script src="{{ asset('js/bolt.js', 'bolt') }}" data-config="{{ bconfig|json_encode }}" data-jsdata="{{ app.jsdata|json_encode }}"></script>*/
/* */
/* {% block page_script %}*/
/* {% endblock page_script %}*/
/* */
/* </body>*/
/* </html>*/
/* */
