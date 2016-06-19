<?php

/* partials/_sub_menu.twig */
class __TwigTemplate_23afd5928ad5fa12d4062fbd769ac25852b839a531623df588efa4e3b3bc9f41 extends Twig_Template
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
        $__internal_4b718bb97b83c097ea7561bd2ce80447a87849b14fbb2090522b7726cfe1be28 = $this->env->getExtension("native_profiler");
        $__internal_4b718bb97b83c097ea7561bd2ce80447a87849b14fbb2090522b7726cfe1be28->enter($__internal_4b718bb97b83c097ea7561bd2ce80447a87849b14fbb2090522b7726cfe1be28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_sub_menu.twig"));

        // line 6
        echo "
";
        // line 8
        if ( !array_key_exists("withsubmenus", $context)) {
            // line 9
            echo "    ";
            $context["withsubmenus"] = true;
        }
        // line 11
        echo "
";
        // line 38
        echo "
";
        // line 40
        $context["__internal_a91af665a9a9f2db7a97719e3252a99e227ccd344ea8d4a8dacf4c2c49d61c27"] = $this;
        // line 41
        echo "
";
        // line 43
        echo "<ul  class=\"menu vertical medium-horizontal ";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "")) : ("")), "html", null, true);
        echo "\" data-responsive-menu=\"accordion medium-dropdown\">
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "    ";
            if ($this->getAttribute($context["item"], "label", array(), "any", true, true)) {
                // line 46
                echo "        ";
                echo $context["__internal_a91af665a9a9f2db7a97719e3252a99e227ccd344ea8d4a8dacf4c2c49d61c27"]->getdisplay_menu_item($context["item"], $context["loop"], "", (isset($context["withsubmenus"]) ? $context["withsubmenus"] : null));
                echo "
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</ul>

";
        
        $__internal_4b718bb97b83c097ea7561bd2ce80447a87849b14fbb2090522b7726cfe1be28->leave($__internal_4b718bb97b83c097ea7561bd2ce80447a87849b14fbb2090522b7726cfe1be28_prof);

    }

    // line 14
    public function getdisplay_menu_item($__item__ = null, $__loop__ = null, $__extraclass__ = null, $__withsubmenus__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "loop" => $__loop__,
            "extraclass" => $__extraclass__,
            "withsubmenus" => $__withsubmenus__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_aabe769b52ed0a584d2a9f17acfba337218516225517ba36e54e0ff3840e9174 = $this->env->getExtension("native_profiler");
            $__internal_aabe769b52ed0a584d2a9f17acfba337218516225517ba36e54e0ff3840e9174->enter($__internal_aabe769b52ed0a584d2a9f17acfba337218516225517ba36e54e0ff3840e9174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_menu_item"));

            // line 15
            echo "    ";
            $context["__internal_fe26f5ccf5d378d2405775ae57eb6116908680552dc6a54254eef2021c964d87"] = $this;
            // line 16
            echo "    ";
            ob_start();
            // line 17
            echo "    <li class=\"index-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array()), "html", null, true);
            // line 18
            echo ((((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "")) : ("")) == "homepage")) ? (" menu-text") : (""));
            // line 19
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) ? (" first") : (""));
            // line 20
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last", array())) ? (" last") : (""));
            // line 21
            echo ((((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array()), false)) : (false)) && (isset($context["withsubmenus"]) ? $context["withsubmenus"] : null))) ? (" is-dropdown-submenu-parent") : (""));
            // line 22
            echo (($this->env->getExtension('Bolt')->current((isset($context["item"]) ? $context["item"] : null))) ? (" active") : (""));
            echo "\">

        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
            echo "\" title='";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "")) : ("")));
            echo "' class='";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array()), "")) : ("")), "html", null, true);
            echo "'>";
            // line 25
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "-")) : ("-")), "html", null, true);
            // line 26
            echo "</a>

        ";
            // line 28
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true) && (isset($context["withsubmenus"]) ? $context["withsubmenus"] : null))) {
                // line 29
                echo "            <ul class=\"menu submenu vertical\" data-submenu>
                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                    // line 31
                    echo "                    ";
                    echo $context["__internal_fe26f5ccf5d378d2405775ae57eb6116908680552dc6a54254eef2021c964d87"]->getdisplay_menu_item($context["submenu"], $context["loop"]);
                    echo "
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "            </ul>
        ";
            }
            // line 35
            echo "    </li>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_aabe769b52ed0a584d2a9f17acfba337218516225517ba36e54e0ff3840e9174->leave($__internal_aabe769b52ed0a584d2a9f17acfba337218516225517ba36e54e0ff3840e9174_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 35,  186 => 33,  169 => 31,  152 => 30,  149 => 29,  147 => 28,  143 => 26,  141 => 25,  134 => 24,  129 => 22,  127 => 21,  125 => 20,  123 => 19,  121 => 18,  118 => 17,  115 => 16,  112 => 15,  94 => 14,  85 => 49,  67 => 46,  64 => 45,  47 => 44,  42 => 43,  39 => 41,  37 => 40,  34 => 38,  31 => 11,  27 => 9,  25 => 8,  22 => 6,);
    }
}
/* {# This file might seem a little complex, because of the high density of tags.*/
/*    It uses Twig macros and ternary selectors. Read up on them, if required:*/
/*    macros: http://twig.sensiolabs.org/doc/templates.html#macros*/
/*    ternary operators: http://twig.sensiolabs.org/doc/templates.html#other-operators*/
/* #}*/
/* */
/* {# Make sure the setting for the submenus is defined. #}*/
/* {% if withsubmenus is not defined %}*/
/*     {% set withsubmenus = true %}*/
/* {% endif %}*/
/* */
/* {# The 'recursive' macro, for inserting one menu item. If it has a submenu, it*/
/*    invokes itself to insert the items of the submenus. #}*/
/* {% macro display_menu_item(item, loop, extraclass, withsubmenus) %}*/
/*     {% from _self import display_menu_item %}*/
/*     {% spaceless %}*/
/*     <li class="index-{{ loop.index -}}*/
/*         {{ item.path|default('') == 'homepage' ? ' menu-text' -}}*/
/*         {{ loop.first ? ' first' -}}*/
/*         {{ loop.last ? ' last' -}}*/
/*         {{ (item.submenu|default(false) and withsubmenus) ? ' is-dropdown-submenu-parent' -}}*/
/*         {{ item|current ? ' active' }}">*/
/* */
/*         <a href="{{ item.link }}" title='{{ item.title|default('')|escape }}' class='{{ item.class|default('') }}'>*/
/*             {{- item.label|default('-') -}}*/
/*         </a>*/
/* */
/*         {% if item.submenu is defined and withsubmenus %}*/
/*             <ul class="menu submenu vertical" data-submenu>*/
/*                 {% for submenu in item.submenu %}*/
/*                     {{ display_menu_item(submenu, loop) }}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     </li>*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {# Make the macro available for use #}*/
/* {% from _self import display_menu_item %}*/
/* */
/* {# The main menu loop: Iterates over the items, calling `display_menu_item` #}*/
/* <ul  class="menu vertical medium-horizontal {{ class|default('') }}" data-responsive-menu="accordion medium-dropdown">*/
/* {% for item in menu %}*/
/*     {% if item.label is defined %}*/
/*         {{ display_menu_item(item, loop, '', withsubmenus) }}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* </ul>*/
/* */
/* */
