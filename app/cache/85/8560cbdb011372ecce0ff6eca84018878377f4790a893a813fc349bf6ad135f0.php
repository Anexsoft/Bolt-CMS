<?php

/* @bolt/overview/_panel-actions_overview.twig */
class __TwigTemplate_15803ae957fc3e50f4693af9ebfb7e07897b6c9d362dce7c36ccefcc345d01e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/overview/_panel-actions_overview.twig", 4);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16cbc88a3d26885c5ce6904da026e8a7afde32abef08461c08abe1a48a079b3f = $this->env->getExtension("native_profiler");
        $__internal_16cbc88a3d26885c5ce6904da026e8a7afde32abef08461c08abe1a48a079b3f->enter($__internal_16cbc88a3d26885c5ce6904da026e8a7afde32abef08461c08abe1a48a079b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/overview/_panel-actions_overview.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16cbc88a3d26885c5ce6904da026e8a7afde32abef08461c08abe1a48a079b3f->leave($__internal_16cbc88a3d26885c5ce6904da026e8a7afde32abef08461c08abe1a48a079b3f_prof);

    }

    // line 6
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_dc8fc44be3247d98d316bab5defa525ebdd0c518943a02002fc169bff5314c41 = $this->env->getExtension("native_profiler");
        $__internal_dc8fc44be3247d98d316bab5defa525ebdd0c518943a02002fc169bff5314c41->enter($__internal_dc8fc44be3247d98d316bab5defa525ebdd0c518943a02002fc169bff5314c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-news";
        
        $__internal_dc8fc44be3247d98d316bab5defa525ebdd0c518943a02002fc169bff5314c41->leave($__internal_dc8fc44be3247d98d316bab5defa525ebdd0c518943a02002fc169bff5314c41_prof);

    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_338e45a521dcd8aa8ce6eedd19bd3169f2392002efa97b49f08a99c4a1d85790 = $this->env->getExtension("native_profiler");
        $__internal_338e45a521dcd8aa8ce6eedd19bd3169f2392002efa97b49f08a99c4a1d85790->enter($__internal_338e45a521dcd8aa8ce6eedd19bd3169f2392002efa97b49f08a99c4a1d85790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-cog";
        
        $__internal_338e45a521dcd8aa8ce6eedd19bd3169f2392002efa97b49f08a99c4a1d85790->leave($__internal_338e45a521dcd8aa8ce6eedd19bd3169f2392002efa97b49f08a99c4a1d85790_prof);

    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_db0e3cd3cd97771babc8b7eea30c19778df5499ecd1a474ff4dc5e8d7f46c253 = $this->env->getExtension("native_profiler");
        $__internal_db0e3cd3cd97771babc8b7eea30c19778df5499ecd1a474ff4dc5e8d7f46c253->enter($__internal_db0e3cd3cd97771babc8b7eea30c19778df5499ecd1a474ff4dc5e8d7f46c253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.actions-all", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        
        $__internal_db0e3cd3cd97771babc8b7eea30c19778df5499ecd1a474ff4dc5e8d7f46c253->leave($__internal_db0e3cd3cd97771babc8b7eea30c19778df5499ecd1a474ff4dc5e8d7f46c253_prof);

    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_36cd5489f67b14ebb1c1f5ed3bedc02151a829bff7fb6d95d9dcce171f2b4cf1 = $this->env->getExtension("native_profiler");
        $__internal_36cd5489f67b14ebb1c1f5ed3bedc02151a829bff7fb6d95d9dcce171f2b4cf1->enter($__internal_36cd5489f67b14ebb1c1f5ed3bedc02151a829bff7fb6d95d9dcce171f2b4cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 13
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()))), "html", null, true);
        echo "\">
        <i class=\"fa fa-plus\"></i> ";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </a>

    <p style=\"margin-top: 15px;\"><strong>";
        // line 17
        echo $this->env->getExtension('Bolt')->trans("general.phrase.filter");
        echo "</strong></p>

    <form class=\"form-inline\">

        ";
        // line 21
        $context["taxonomyfilter"] = false;
        // line 22
        echo "
        <div class=\"form-group\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
            // line 25
            echo "            ";
            if (twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"))) {
                // line 26
                echo "                ";
                if ($this->env->getExtension('Bolt')->request(("taxonomy-" . $context["taxonomy"]))) {
                    // line 27
                    echo "                    ";
                    $context["taxonomyfilter"] = true;
                    // line 28
                    echo "                ";
                }
                // line 29
                echo "                <select name='taxonomy-";
                echo twig_escape_filter($this->env, $context["taxonomy"], "html", null, true);
                echo "' class='form-control'>
                    <option value=''>
                        (";
                // line 31
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method"), $context["taxonomy"])) : ($context["taxonomy"])), "html", null, true);
                echo ")
                    </option>
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"));
                foreach ($context['_seq'] as $context["slug"] => $context["name"]) {
                    // line 34
                    echo "                    <option value='";
                    echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                    echo "' ";
                    if (($this->env->getExtension('Bolt')->request(("taxonomy-" . $context["taxonomy"])) == $context["slug"])) {
                        echo "selected";
                    }
                    echo ">
                        ";
                    // line 35
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['slug'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                </select>
                ";
                // line 39
                echo $this->env->getExtension('Bolt')->trans("general.phrase.or");
                echo "
            ";
            }
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <input type=\"text\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->request("filter", "", true), "html", null, true);
        echo "\" name=\"filter\" style=\"width: 110px;\" placeholder=\"";
        echo $this->env->getExtension('Bolt')->trans("general.phrase.keyword-ellipsis");
        echo "\">
        </div>

        <div class=\"form-group\" style=\"display: block; margin-top: 12px;\">
            <button type=\"submit\" class=\"btn btn-tertiary\"><i class=\"fa fa-filter\"></i> ";
        // line 46
        echo $this->env->getExtension('Bolt')->trans("general.phrase.filter");
        echo "</button>

            ";
        // line 48
        if ((($this->env->getExtension('Bolt')->request("filter") || $this->env->getExtension('Bolt')->request("order")) || (isset($context["taxonomyfilter"]) ? $context["taxonomyfilter"] : null))) {
            // line 49
            echo "                <a class=\"btn btn-tertiary\" href=\"?\"><i class=\"fa fa-close\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.clear-filter-sort");
            echo "</a>
            ";
        }
        // line 51
        echo "        </div>

    </form>


    ";
        // line 56
        $context["description"] = $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), 2 => "description"), array("DEFAULT" => (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array()))) : (""))));
        // line 57
        echo "    <div class=\"description\">
        ";
        // line 58
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 59
            echo "            ";
            echo $this->env->getExtension('Bolt')->markdown((isset($context["description"]) ? $context["description"] : null));
            echo "
        ";
        }
        // line 61
        echo "    </div>

    <p><strong>";
        // line 63
        echo $this->env->getExtension('Bolt')->trans("general.phrase.details");
        echo "</strong></p>
    <ul>
        <li>";
        // line 65
        echo $this->env->getExtension('Bolt')->trans("general.phrase.status-default");
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array()), "published")) : ("published")), "html", null, true);
        echo "</li>
        <li>";
        // line 66
        echo $this->env->getExtension('Bolt')->trans("general.phrase.listing-template");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_template"), "method"))), "html", null, true);
        echo "</code></li>
        <li>";
        // line 67
        echo $this->env->getExtension('Bolt')->trans("general.phrase.template-detail");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/record_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/record_template"), "method"))), "html", null, true);
        echo "</code></li>
        ";
        // line 68
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), "")) : ("")))) {
            // line 69
            echo "            <li>";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.taxonomy");
            echo ": ";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "taxonomy", array()), ", "), "html", null, true);
            echo "</li>
        ";
        }
        // line 71
        echo "        ";
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array()), "")) : ("")))) {
            // line 72
            echo "            <li>
                ";
            // line 73
            echo $this->env->getExtension('Bolt')->trans("general.phrase.relationships");
            echo ":
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "relations", array()));
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
            foreach ($context['_seq'] as $context["rel"] => $context["data"]) {
                // line 75
                echo "                    ";
                echo twig_escape_filter($this->env, $context["rel"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 76
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['rel'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </li>
        ";
        }
        // line 79
        echo "    </ul>

";
        
        $__internal_36cd5489f67b14ebb1c1f5ed3bedc02151a829bff7fb6d95d9dcce171f2b4cf1->leave($__internal_36cd5489f67b14ebb1c1f5ed3bedc02151a829bff7fb6d95d9dcce171f2b4cf1_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/overview/_panel-actions_overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 79,  293 => 77,  279 => 76,  273 => 75,  256 => 74,  252 => 73,  249 => 72,  246 => 71,  238 => 69,  236 => 68,  230 => 67,  224 => 66,  218 => 65,  213 => 63,  209 => 61,  203 => 59,  201 => 58,  198 => 57,  196 => 56,  189 => 51,  183 => 49,  181 => 48,  176 => 46,  166 => 42,  160 => 41,  155 => 39,  152 => 38,  143 => 35,  134 => 34,  130 => 33,  125 => 31,  119 => 29,  116 => 28,  113 => 27,  110 => 26,  107 => 25,  103 => 24,  99 => 22,  97 => 21,  90 => 17,  84 => 14,  79 => 13,  73 => 12,  61 => 10,  49 => 8,  37 => 6,  11 => 4,);
    }
}
/* {##*/
/*  # Sidebar-Panel: Displays actions for contenttype*/
/*  #}*/
/* {% extends '@bolt/_base/_panel.twig' %}*/
/* */
/* {% block panel_class 'panel-news' %}*/
/* */
/* {% block panel_icon 'fa-cog' %}*/
/* */
/* {% block panel_head __('contenttypes.generic.actions-all', {'%contenttypes%': context.contenttype.slug}) %}*/
/* */
/* {% block panel_body %}*/
/*     <a class="btn btn-primary" href="{{ path('editcontent', {'contenttypeslug': context.contenttype.slug}) }}">*/
/*         <i class="fa fa-plus"></i> {{ __('contenttypes.generic.new', {'%contenttype%': context.contenttype.slug}) }}*/
/*     </a>*/
/* */
/*     <p style="margin-top: 15px;"><strong>{{ __('general.phrase.filter') }}</strong></p>*/
/* */
/*     <form class="form-inline">*/
/* */
/*         {% set taxonomyfilter = false %}*/
/* */
/*         <div class="form-group">*/
/*         {% for taxonomy in context.contenttype.taxonomy|default([]) %}*/
/*             {% if app.config.get('taxonomy/' ~ taxonomy ~ '/options') is iterable %}*/
/*                 {% if request('taxonomy-' ~ taxonomy ) %}*/
/*                     {% set taxonomyfilter = true %}*/
/*                 {% endif %}*/
/*                 <select name='taxonomy-{{taxonomy}}' class='form-control'>*/
/*                     <option value=''>*/
/*                         ({{ app.config.get('taxonomy/' ~ taxonomy ~ '/name')|default(taxonomy) }})*/
/*                     </option>*/
/*                 {% for slug, name in app.config.get('taxonomy/' ~ taxonomy ~ '/options') %}*/
/*                     <option value='{{slug}}' {% if request('taxonomy-' ~ taxonomy ) == slug %}selected{% endif %}>*/
/*                         {{name}}*/
/*                     </option>*/
/*                 {% endfor %}*/
/*                 </select>*/
/*                 {{ __('general.phrase.or') }}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*             <input type="text" class="form-control" value="{{ request('filter', '', true) }}" name="filter" style="width: 110px;" placeholder="{{ __('general.phrase.keyword-ellipsis') }}">*/
/*         </div>*/
/* */
/*         <div class="form-group" style="display: block; margin-top: 12px;">*/
/*             <button type="submit" class="btn btn-tertiary"><i class="fa fa-filter"></i> {{ __('general.phrase.filter') }}</button>*/
/* */
/*             {% if request('filter') or request('order') or taxonomyfilter %}*/
/*                 <a class="btn btn-tertiary" href="?"><i class="fa fa-close"></i> {{ __('general.phrase.clear-filter-sort') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*     </form>*/
/* */
/* */
/*     {% set description = __(['contenttypes', context.contenttype.slug, 'description'], {DEFAULT: context.contenttype.description|default()}) %}*/
/*     <div class="description">*/
/*         {% if description %}*/
/*             {{ description|markdown }}*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <p><strong>{{ __('general.phrase.details') }}</strong></p>*/
/*     <ul>*/
/*         <li>{{ __('general.phrase.status-default') }}: {{ context.contenttype.default_status|default('published') }}</li>*/
/*         <li>{{ __('general.phrase.listing-template') }}: <code>{{ context.contenttype.listing_template|default( app.config.get('general/listing_template') ) }}</code></li>*/
/*         <li>{{ __('general.phrase.template-detail') }}: <code>{{ context.contenttype.record_template|default( app.config.get('general/record_template') ) }}</code></li>*/
/*         {% if context.contenttype.taxonomy|default('') is iterable %}*/
/*             <li>{{ __('general.phrase.taxonomy') }}: {{ context.contenttype.taxonomy|join(', ') }}</li>*/
/*         {% endif %}*/
/*         {% if context.contenttype.relations|default('') is iterable %}*/
/*             <li>*/
/*                 {{ __('general.phrase.relationships') }}:*/
/*                 {% for rel, data in context.contenttype.relations %}*/
/*                     {{ rel }}{% if not loop.last %}, {% endif %}*/
/*                 {% endfor %}*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* */
/* {% endblock panel_body %}*/
/* */
