<?php

/* listing.twig */
class __TwigTemplate_14b6dc7017fa4d24f0dce76f53eeec60850eeed466522ffc5038ee48890f3976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "listing.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce3600547d7b931111d6f802fc9bb3b62d805a96e161f09920e83d921a5bd9ae = $this->env->getExtension("native_profiler");
        $__internal_ce3600547d7b931111d6f802fc9bb3b62d805a96e161f09920e83d921a5bd9ae->enter($__internal_ce3600547d7b931111d6f802fc9bb3b62d805a96e161f09920e83d921a5bd9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listing.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce3600547d7b931111d6f802fc9bb3b62d805a96e161f09920e83d921a5bd9ae->leave($__internal_ce3600547d7b931111d6f802fc9bb3b62d805a96e161f09920e83d921a5bd9ae_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2d967fab737201454181707492080e7f2673c3c30806836dd9d3eff07ef9d97e = $this->env->getExtension("native_profiler");
        $__internal_2d967fab737201454181707492080e7f2673c3c30806836dd9d3eff07ef9d97e->enter($__internal_2d967fab737201454181707492080e7f2673c3c30806836dd9d3eff07ef9d97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
        ";
        // line 10
        echo "
        ";
        // line 12
        echo "        ";
        if (array_key_exists("taxonomytype", $context)) {
            // line 13
            echo "            <h1>
                ";
            // line 14
            echo $this->env->getExtension('Bolt')->trans("general.phrase.overview-for");
            echo "
                ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array(), "any", false, true), (isset($context["slug"]) ? $context["slug"] : null), array(), "array", true, true)) {
                // line 16
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()), (isset($context["slug"]) ? $context["slug"] : null), array(), "array"), "html", null, true);
                echo "
                ";
            } else {
                // line 18
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo "
                ";
            }
            // line 20
            echo "            </h1>
            ";
            // line 23
            echo "            ";
            if ( !$this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array())) {
                // line 24
                echo "                ";
                // line 25
                echo "                ";
                $context["records"] = $this->env->getExtension('Bolt')->order((isset($context["records"]) ? $context["records"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_sort"), "method"));
                // line 26
                echo "            ";
            }
            // line 27
            echo "        ";
        }
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 30
            echo "            <article>

                <h2><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</a></h2>

                ";
            // line 34
            echo $this->env->getExtension('Bolt')->popup($this->getAttribute($context["record"], "image", array()), 1200, 500);
            echo "

                ";
            // line 37
            echo "                ";
            if ($this->getAttribute($context["record"], "introduction", array())) {
                // line 38
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "introduction", array()), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute(            // line 39
$context["record"], "teaser", array())) {
                // line 40
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "teaser", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 42
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 300, 1 => false, 2 => ((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) ? $context["search"] : null), "")) : (""))), "method"), "html", null, true);
                echo "</p>
                ";
            }
            // line 44
            echo "
                ";
            // line 45
            $this->loadTemplate("partials/_recordfooter.twig", "listing.twig", 45)->display(array_merge($context, array("record" => $context["record"])));
            // line 46
            echo "
            </article>

            ";
            // line 49
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 50
                echo "                <hr>
            ";
            }
            // line 52
            echo "
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <article>

                <h2>";
            // line 56
            echo $this->env->getExtension('Bolt')->trans("general.phrase.no-content-found");
            echo "</h2>

                <p>
                    ";
            // line 59
            echo $this->env->getExtension('Bolt')->trans("Unfortunately, no content could be found. Try another page, or go to the <a href=\"%paths_root%\">homepage</a>.", array("%paths_root%" => $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array())));
            echo "
                </p>

            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
        ";
        // line 66
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env, "", 4, "partials/_sub_pager.twig"), "html", null, true);
        echo "

";
        
        $__internal_2d967fab737201454181707492080e7f2673c3c30806836dd9d3eff07ef9d97e->leave($__internal_2d967fab737201454181707492080e7f2673c3c30806836dd9d3eff07ef9d97e_prof);

    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 66,  197 => 64,  186 => 59,  180 => 56,  176 => 54,  162 => 52,  158 => 50,  156 => 49,  151 => 46,  149 => 45,  146 => 44,  140 => 42,  134 => 40,  132 => 39,  127 => 38,  124 => 37,  119 => 34,  112 => 32,  108 => 30,  90 => 29,  87 => 28,  84 => 27,  81 => 26,  78 => 25,  76 => 24,  73 => 23,  70 => 20,  64 => 18,  58 => 16,  56 => 15,  52 => 14,  49 => 13,  46 => 12,  43 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/_master.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*         {# This template is used for 'listings': Generic pages that list a number of*/
/*            records from a certain contenttype. These records are available as an array*/
/*            called 'records'. In the for-loop below, we iterate over the records that*/
/*            are on this page. It can be used for overview pages like 'all entries', or*/
/*            'all records tagged with kittens'. #}*/
/* */
/*         {# If used for listing a taxonomy, we add a heading.: #}*/
/*         {% if taxonomytype is defined %}*/
/*             <h1>*/
/*                 {{ __('general.phrase.overview-for') }}*/
/*                 {% if taxonomy.options[slug] is defined %}*/
/*                     {{ taxonomy.options[slug] }}*/
/*                 {% else %}*/
/*                     {{ slug }}*/
/*                 {% endif %}*/
/*             </h1>*/
/*             {# Taxonomies are fetched unordered by design except if 'has_sortorder'*/
/*                is set to true. This way we keep 'grouping' intact in the listing. #}*/
/*             {% if not taxonomy.has_sortorder %}*/
/*                 {# If we specified an order in config.yml, sort them here, accordingly: #}*/
/*                 {% set records = records|order(app.config.get('general/listing_sort')) %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% for record in records %}*/
/*             <article>*/
/* */
/*                 <h2><a href="{{ record.link }}">{{ record.title }}</a></h2>*/
/* */
/*                 {{ popup(record.image, 1200, 500) }}*/
/* */
/*                 {# display something introduction-like.. #}*/
/*                 {% if record.introduction %}*/
/*                     {{ record.introduction }}*/
/*                 {% elseif record.teaser %}*/
/*                     {{ record.teaser }}*/
/*                 {% else %}*/
/*                     <p>{{ record.excerpt(300, false, search|default('')) }}</p>*/
/*                 {% endif %}*/
/* */
/*                 {% include 'partials/_recordfooter.twig' with { 'record': record } %}*/
/* */
/*             </article>*/
/* */
/*             {% if not loop.last %}*/
/*                 <hr>*/
/*             {% endif %}*/
/* */
/*         {% else %}*/
/*             <article>*/
/* */
/*                 <h2>{{ __('general.phrase.no-content-found') }}</h2>*/
/* */
/*                 <p>*/
/*                     {{ __("Unfortunately, no content could be found. Try another page, or go to the <a href=\"%paths_root%\">homepage</a>.", {'%paths_root%': paths.root} ) }}*/
/*                 </p>*/
/* */
/*             </article>*/
/*         {% endfor %}*/
/* */
/*         {# If there are more records than will fit on one page, the pager is shown. #}*/
/*         {{ pager(template = 'partials/_sub_pager.twig') }}*/
/* */
/* {% endblock main %}*/
