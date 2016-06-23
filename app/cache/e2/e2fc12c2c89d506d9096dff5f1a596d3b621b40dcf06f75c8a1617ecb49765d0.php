<?php

/* @bolt/_nav/_secondary-content.twig */
class __TwigTemplate_65836e8e06f0b54fcc55bc055063bc51b30490b965c636d87937ce793ae64887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae6e1c80bc752a12dc80df3ca2e064b0244c036c9114ef6cbc2f192e42df685c = $this->env->getExtension("native_profiler");
        $__internal_ae6e1c80bc752a12dc80df3ca2e064b0244c036c9114ef6cbc2f192e42df685c->enter($__internal_ae6e1c80bc752a12dc80df3ca2e064b0244c036c9114ef6cbc2f192e42df685c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-content.twig"));

        // line 1
        $context["definedSubs"] = array();
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
            // line 4
            echo "    ";
            if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . $context["slug"]))) {
                // line 5
                echo "        ";
                $context["sub_view"] = array("icon" => (($this->getAttribute(                // line 6
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.view", array("%contenttypes%" => $this->getAttribute(                // line 7
$context["contenttype"], "slug", array()))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" =>                 // line 8
$context["slug"])));
                // line 10
                echo "        ";
                $context["sub_new"] = array("icon" => "fa:plus", "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" =>                 // line 12
$context["slug"])), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" =>                 // line 13
$context["slug"])), "isallowed" => (("contenttype:" .                 // line 14
$context["slug"]) . ":create"));
                // line 16
                echo "        ";
                $context["sub"] = array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null), 1 => (isset($context["sub_new"]) ? $context["sub_new"] : null), 2 => "-");
                // line 17
                echo "
        ";
                // line 19
                echo "        ";
                if (($this->getAttribute($context["contenttype"], "show_in_menu", array()) == "true")) {
                    // line 20
                    echo "
            ";
                    // line 21
                    $template_storage = $context['app']['storage'];
                    $context['records'] =                     $template_storage->getContent((isset($context["slug"]) ? $context["slug"] : null), array("limit" => 4, "hydrate" => false, "order" => "-datechanged") );
                    // line 22
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 23
                        echo "                ";
                        $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => (($this->getAttribute(                        // line 25
$context["contenttype"], "icon_one", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_one", array()), "fa:file-text-o")) : ("fa:file-text-o")), "label" => trim(twig_replace_filter($this->getAttribute(                        // line 26
$context["record"], "excerpt", array(0 => 80, 1 => true), "method"), array("</b>" => "&nbsp;</b>"))), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" =>                         // line 27
$context["slug"], "id" => $this->getAttribute($context["record"], "id", array()))))));
                        // line 30
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "
            ";
                    // line 32
                    $context["label"] = $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($context["contenttype"], "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array())));
                    // line 33
                    echo "            ";
                    $context["active"] = (((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Content/*") && ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array()))) : ("")) == $context["slug"]));
                    // line 34
                    echo "
            ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => (($this->getAttribute($context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), "")) : ("")), 1 => (isset($context["label"]) ? $context["label"] : null), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => (isset($context["active"]) ? $context["active"] : null), 4 => true), "method"), "html", null, true);
                    echo "

        ";
                    // line 38
                    echo "        ";
                } else {
                    // line 39
                    echo "
            ";
                    // line 40
                    $context["sub_view"] = array("icon" => (($this->getAttribute(                    // line 41
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute(                    // line 42
$context["contenttype"], "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array()))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" =>                     // line 43
$context["slug"])));
                    // line 45
                    echo "
            ";
                    // line 46
                    $context["key"] = (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ($this->getAttribute($context["contenttype"], "show_in_menu", array())) : ($this->env->getExtension('Bolt')->trans("general.phrase.other-content")));
                    // line 47
                    echo "            ";
                    if ($this->getAttribute((isset($context["definedSubs"]) ? $context["definedSubs"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array", true, true)) {
                        // line 48
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["definedSubs"]) ? $context["definedSubs"] : null));
                        foreach ($context['_seq'] as $context["submenuName"] => $context["submenudef"]) {
                            // line 49
                            echo "                    ";
                            if (((isset($context["key"]) ? $context["key"] : null) == $context["submenuName"])) {
                                // line 50
                                echo "                        ";
                                $context["submenudef"] = twig_array_merge($context["submenudef"], array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null)));
                                // line 51
                                echo "                        ";
                                $context["definedSubs"] = twig_array_merge((isset($context["definedSubs"]) ? $context["definedSubs"] : null), array($context["submenuName"] => $context["submenudef"]));
                                // line 52
                                echo "                    ";
                            }
                            // line 53
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['submenuName'], $context['submenudef'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "            ";
                    } else {
                        // line 55
                        echo "                ";
                        $context["definedSubs"] = twig_array_merge((isset($context["definedSubs"]) ? $context["definedSubs"] : null), array((isset($context["key"]) ? $context["key"] : null) => array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null))));
                        // line 56
                        echo "            ";
                    }
                    // line 57
                    echo "
        ";
                }
                // line 59
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["definedSubs"]) ? $context["definedSubs"] : null));
        foreach ($context['_seq'] as $context["submenuName"] => $context["submenudef"]) {
            // line 64
            echo "    ";
            // line 65
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:th-list", 1 => $context["submenuName"], 2 => $context["submenudef"], 3 => false, 4 => false, 5 => false, 6 => true), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['submenuName'], $context['submenudef'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ae6e1c80bc752a12dc80df3ca2e064b0244c036c9114ef6cbc2f192e42df685c->leave($__internal_ae6e1c80bc752a12dc80df3ca2e064b0244c036c9114ef6cbc2f192e42df685c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 65,  163 => 64,  159 => 63,  156 => 61,  149 => 59,  145 => 57,  142 => 56,  139 => 55,  136 => 54,  130 => 53,  127 => 52,  124 => 51,  121 => 50,  118 => 49,  113 => 48,  110 => 47,  108 => 46,  105 => 45,  103 => 43,  102 => 42,  101 => 41,  100 => 40,  97 => 39,  94 => 38,  89 => 35,  86 => 34,  83 => 33,  81 => 32,  78 => 31,  72 => 30,  70 => 27,  69 => 26,  68 => 25,  66 => 23,  61 => 22,  58 => 21,  55 => 20,  52 => 19,  49 => 17,  46 => 16,  44 => 14,  43 => 13,  42 => 12,  40 => 10,  38 => 8,  37 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set definedSubs = [] %}*/
/* */
/* {% for slug, contenttype in app.config.get('contenttypes')  %}*/
/*     {% if isallowed('contenttype:' ~ slug) %}*/
/*         {% set sub_view = {*/
/*             icon: contenttype.icon_many|default(contenttype.show_in_menu ? 'fa:files-o' : 'fa:th-list'),*/
/*             label: __('contenttypes.generic.view', {'%contenttypes%': contenttype.slug}),*/
/*             link: path('overview', {'contenttypeslug': slug})*/
/*         } %}*/
/*         {% set sub_new = {*/
/*             icon: 'fa:plus',*/
/*             label: __('contenttypes.generic.new', {'%contenttype%': slug}),*/
/*             link: path('editcontent', {'contenttypeslug': slug}),*/
/*             isallowed: 'contenttype:' ~ slug ~ ':create'*/
/*         } %}*/
/*         {% set sub = [sub_view, sub_new, '-'] %}*/
/* */
/*         {# Contenttypes, where show_in_menu is set true #}*/
/*         {% if contenttype.show_in_menu == "true" %}*/
/* */
/*             {% setcontent records = slug limit 4 nohydrate orderby '-datechanged' %}*/
/*             {% for record in records %}*/
/*                 {% set sub = sub|merge([*/
/*                     {*/
/*                         icon: contenttype.icon_one|default('fa:file-text-o'),*/
/*                         label: record.excerpt(80, true)|replace({"</b>": "&nbsp;</b>"})|trim,*/
/*                         link: path('editcontent', {'contenttypeslug': slug, 'id': record.id})*/
/*                     }*/
/*                 ]) %}*/
/*             {% endfor %}*/
/* */
/*             {% set label = __(['contenttypes', contenttype.slug, 'name', 'plural'], {DEFAULT: contenttype.name}) %}*/
/*             {% set active = (page_nav == 'Content/*' and context.contenttype.slug|default == slug) %}*/
/* */
/*             {{ nav.submenu(contenttype.icon_many|default(''), label, sub, active, true) }}*/
/* */
/*         {# Contenttypes, where show_in_menu is set to a custom value or false #}*/
/*         {% else %}*/
/* */
/*             {% set sub_view = {*/
/*                 icon: contenttype.icon_many|default(contenttype.show_in_menu ? 'fa:files-o' : 'fa:th-list'),*/
/*                 label: __(['contenttypes', contenttype.slug, 'name', 'plural'], {DEFAULT: contenttype.name}),*/
/*                 link: path('overview', {'contenttypeslug': slug})*/
/*             } %}*/
/* */
/*             {% set key = contenttype.show_in_menu ?: __('general.phrase.other-content') %}*/
/*             {% if definedSubs[key] is defined %}*/
/*                 {% for submenuName, submenudef in definedSubs %}*/
/*                     {% if key == submenuName %}*/
/*                         {% set submenudef = submenudef|merge([sub_view]) %}*/
/*                         {% set definedSubs = definedSubs|merge({(submenuName) : submenudef}) %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 {% set definedSubs = definedSubs|merge({(key) : [sub_view]}) %}*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {# Display contenttypes, that have show_in_menu set to false or a custom value in submenus #}*/
/* {% for submenuName, submenudef in definedSubs %}*/
/*     {# Create the submenu and force it to be a submenu #}*/
/*     {{ nav.submenu('fa:th-list', submenuName, submenudef, false, false, false, true) }}*/
/* {% endfor %}*/
/* */
