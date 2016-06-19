<?php

/* @bolt/editcontent/_taxonomies.twig */
class __TwigTemplate_c85c027855558eab386136d9c6ad078ce4c477883b5ed8125d267ba41e450830 extends Twig_Template
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
        $__internal_1194ac8ed08708434a0e1478bab7a180821833909f866ecb99d4cda63575514a = $this->env->getExtension("native_profiler");
        $__internal_1194ac8ed08708434a0e1478bab7a180821833909f866ecb99d4cda63575514a->enter($__internal_1194ac8ed08708434a0e1478bab7a180821833909f866ecb99d4cda63575514a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_taxonomies.twig"));

        // line 2
        echo "
";
        // line 3
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 4
            echo "    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Bolt')->trans("general.phrase.taxonomy");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Bolt')->trans("general.phrase.taxonomy");
            echo "\"
                  data-content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "info.taxonomy", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.info");
            echo "</span>
    </h3>
";
        }
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
            // line 12
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method", false, true), $context["taxonomyslug"], array(), "array", true, true)) {
                // line 13
                echo "        ";
                $context["taxonomy"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array");
                // line 14
                echo "
        <div data-bolt-fieldset=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()), "html", null, true);
                echo "\">
            ";
                // line 17
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array())))) {
                    // line 18
                    echo "                <div class=\"prefix\">
                    ";
                    // line 19
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array()));
                    echo "
                </div>
            ";
                }
                // line 22
                echo "
            ";
                // line 24
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "tags")) {
                    // line 25
                    echo "                ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/fields/_tags.twig");
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 26
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "categories")) {
                    // line 27
                    echo "                ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/fields/_categories.twig");
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 28
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "grouping")) {
                    // line 29
                    echo "                ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/fields/_grouping.twig");
                    echo "
            ";
                }
                // line 31
                echo "
            ";
                // line 33
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array())))) {
                    // line 34
                    echo "                <div class=\"postfix\">
                    ";
                    // line 35
                    echo $this->env->getExtension('Bolt')->markdown($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array()));
                    echo "
                </div>
            ";
                }
                // line 38
                echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array()) && twig_in_filter("taxonomy", $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "groups", array())))) {
            // line 43
            echo "    ";
            echo twig_include($this->env, $context, "@bolt/editcontent/_field.twig");
            echo "
";
        }
        
        $__internal_1194ac8ed08708434a0e1478bab7a180821833909f866ecb99d4cda63575514a->leave($__internal_1194ac8ed08708434a0e1478bab7a180821833909f866ecb99d4cda63575514a_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_taxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 43,  151 => 42,  148 => 41,  132 => 38,  126 => 35,  123 => 34,  120 => 33,  117 => 31,  111 => 29,  109 => 28,  104 => 27,  102 => 26,  97 => 25,  94 => 24,  91 => 22,  85 => 19,  82 => 18,  79 => 17,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  49 => 11,  46 => 10,  38 => 7,  34 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# taxonomies for the contenttype that this record is part of. #}*/
/* */
/* {% if not context.has.tabs %}*/
/*     <h3>*/
/*         {{ __('general.phrase.taxonomy') }}*/
/*         <span class="label info-pop" data-html="true" data-title="{{ __('general.phrase.taxonomy') }}"*/
/*                   data-content="{{ app.translator.trans('info.taxonomy', {}, 'infos') }}">{{ __('general.phrase.info') }}</span>*/
/*     </h3>*/
/* {% endif %}*/
/* */
/* {% for taxonomyslug in context.contenttype.taxonomy|default([]) %}*/
/*     {% if config.get('taxonomy')[taxonomyslug] is defined %}*/
/*         {% set taxonomy = config.get('taxonomy')[taxonomyslug] %}*/
/* */
/*         <div data-bolt-fieldset="{{ taxonomy.behaves_like }}">*/
/*             {# Prefix #}*/
/*             {% if taxonomy.prefix is defined and taxonomy.prefix is not empty %}*/
/*                 <div class="prefix">*/
/*                     {{ taxonomy.prefix|markdown }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {# Fieldset #}*/
/*             {% if taxonomy.behaves_like == 'tags' %}*/
/*                 {{ include('@bolt/editcontent/fields/_tags.twig') }}*/
/*             {% elseif taxonomy.behaves_like == 'categories' %}*/
/*                 {{ include('@bolt/editcontent/fields/_categories.twig') }}*/
/*             {% elseif taxonomy.behaves_like == 'grouping' %}*/
/*                 {{ include('@bolt/editcontent/fields/_grouping.twig') }}*/
/*             {% endif %}*/
/* */
/*             {# Postfix #}*/
/*             {% if taxonomy.postfix is defined and taxonomy.postfix is not empty %}*/
/*                 <div class="postfix">*/
/*                     {{ taxonomy.postfix|markdown }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {% if context.has.tabs and 'taxonomy' in context.contenttype.groups %}*/
/*     {{ include('@bolt/editcontent/_field.twig') }}*/
/* {% endif %}*/
/* */
