<?php

/* @bolt/_nav/_secondary-extensions.twig */
class __TwigTemplate_cac6bdf64eadb0c98be6f545d601bda1c798a6e1805a4bdd723c935bcbbf649f extends Twig_Template
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
        $__internal_3a4554fd0320abf5b9279a07e6d46d9492442bf709feb55e90b21381cd872b85 = $this->env->getExtension("native_profiler");
        $__internal_3a4554fd0320abf5b9279a07e6d46d9492442bf709feb55e90b21381cd872b85->enter($__internal_3a4554fd0320abf5b9279a07e6d46d9492442bf709feb55e90b21381cd872b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-extensions.twig"));

        // line 2
        $context["sub"] = array();
        // line 3
        $context["extend_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "extend"), "method");
        // line 4
        echo "
";
        // line 5
        if ($this->env->getExtension('Bolt')->isAllowed("extensions||extensions:config")) {
            // line 6
            echo "
    ";
            // line 8
            echo "    ";
            $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => $this->getAttribute(            // line 10
(isset($context["extend_menu"]) ? $context["extend_menu"] : null), "icon", array()), "label" => $this->getAttribute(            // line 11
(isset($context["extend_menu"]) ? $context["extend_menu"] : null), "label", array()), "link" => $this->getAttribute(            // line 12
(isset($context["extend_menu"]) ? $context["extend_menu"] : null), "uri", array()), "isallowed" => $this->getAttribute(            // line 13
(isset($context["extend_menu"]) ? $context["extend_menu"] : null), "permission", array()))));
            // line 16
            echo "
    ";
            // line 18
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["extend_menu"]) ? $context["extend_menu"] : null), "children", array())) > 0)) {
                // line 19
                echo "        ";
                $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => "-"));
                // line 20
                echo "    ";
            }
            // line 21
            echo "

";
        }
        // line 24
        echo "
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["extend_menu"]) ? $context["extend_menu"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["extend_submenu"]) {
            // line 27
            echo "    ";
            $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => (($this->getAttribute(            // line 29
$context["extend_submenu"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["extend_submenu"], "icon", array()), "fa:briefcase")) : ("fa:briefcase")), "label" => $this->getAttribute(            // line 30
$context["extend_submenu"], "label", array()), "link" => $this->getAttribute(            // line 31
$context["extend_submenu"], "uri", array()), "isallowed" => $this->getAttribute(            // line 32
$context["extend_submenu"], "permission", array()))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extend_submenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:cubes", 1 => $this->env->getExtension('Bolt')->trans("general.phrase.extras"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/ExtendBolt")), "method"), "html", null, true);
        echo "
";
        
        $__internal_3a4554fd0320abf5b9279a07e6d46d9492442bf709feb55e90b21381cd872b85->leave($__internal_3a4554fd0320abf5b9279a07e6d46d9492442bf709feb55e90b21381cd872b85_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-extensions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 37,  76 => 36,  70 => 32,  69 => 31,  68 => 30,  67 => 29,  65 => 27,  61 => 26,  58 => 24,  53 => 21,  50 => 20,  47 => 19,  44 => 18,  41 => 16,  39 => 13,  38 => 12,  37 => 11,  36 => 10,  34 => 8,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  22 => 2,);
    }
}
/* {# Empty array for submenu #}*/
/* {% set sub = [] %}*/
/* {% set extend_menu = app['menu.admin'].get('extend') %}*/
/* */
/* {% if isallowed('extensions||extensions:config') %}*/
/* */
/*     {# Add the "view" and "configure" options #}*/
/*     {% set sub = sub|merge([*/
/*         {*/
/*             icon: extend_menu.icon,*/
/*             label: extend_menu.label,*/
/*             link: extend_menu.uri,*/
/*             isallowed: extend_menu.permission*/
/*         }*/
/*     ]) %}*/
/* */
/*     {# Add a divider, if there are any items to print. We don't want a divider with nothing below it #}*/
/*     {% if extend_menu.children|length > 0 %}*/
/*         {% set sub = sub|merge(['-']) %}*/
/*     {% endif %}*/
/* */
/* */
/* {% endif %}*/
/* */
/* {# Add the available extensions that have added a menu-item. #}*/
/* {% for extend_submenu in extend_menu.children %}*/
/*     {% set sub = sub|merge([*/
/*         {*/
/*             icon: extend_submenu.icon|default('fa:briefcase'),*/
/*             label: extend_submenu.label,*/
/*             link: extend_submenu.uri,*/
/*             isallowed: extend_submenu.permission*/
/*         }*/
/*     ]) %}*/
/* {% endfor %}*/
/* */
/* {{ nav.submenu('fa:cubes', __('general.phrase.extras'), sub, (page_nav == 'Settings/ExtendBolt')) }}*/
/* */
