<?php

/* @bolt/components/panel-lastmodified.twig */
class __TwigTemplate_88cb7dc00c71e97e2d4b08c7647b486d2d1f6bb383a58b97eea97f6487dfab63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/components/panel-lastmodified.twig", 5);
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
        $__internal_abeedd8e7872f49056f21305cc1e640e25555890b81ecef861ed91cec4c09baa = $this->env->getExtension("native_profiler");
        $__internal_abeedd8e7872f49056f21305cc1e640e25555890b81ecef861ed91cec4c09baa->enter($__internal_abeedd8e7872f49056f21305cc1e640e25555890b81ecef861ed91cec4c09baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-lastmodified.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abeedd8e7872f49056f21305cc1e640e25555890b81ecef861ed91cec4c09baa->leave($__internal_abeedd8e7872f49056f21305cc1e640e25555890b81ecef861ed91cec4c09baa_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_833ce4e18d360bddbca2150c058f6d92f632f6d9a79f1126debd67d08b6dc7dc = $this->env->getExtension("native_profiler");
        $__internal_833ce4e18d360bddbca2150c058f6d92f632f6d9a79f1126debd67d08b6dc7dc->enter($__internal_833ce4e18d360bddbca2150c058f6d92f632f6d9a79f1126debd67d08b6dc7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-lastmodified";
        
        $__internal_833ce4e18d360bddbca2150c058f6d92f632f6d9a79f1126debd67d08b6dc7dc->leave($__internal_833ce4e18d360bddbca2150c058f6d92f632f6d9a79f1126debd67d08b6dc7dc_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_0140028102e1f3d63eecb1b145887831a1ae7429f970c5c578aebdae9ceda1de = $this->env->getExtension("native_profiler");
        $__internal_0140028102e1f3d63eecb1b145887831a1ae7429f970c5c578aebdae9ceda1de->enter($__internal_0140028102e1f3d63eecb1b145887831a1ae7429f970c5c578aebdae9ceda1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-clock-o";
        
        $__internal_0140028102e1f3d63eecb1b145887831a1ae7429f970c5c578aebdae9ceda1de->leave($__internal_0140028102e1f3d63eecb1b145887831a1ae7429f970c5c578aebdae9ceda1de_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_039d13392d9ff7c811fbdc1325fc2e6ab480371200914a4b549ee7f20f1b2e2f = $this->env->getExtension("native_profiler");
        $__internal_039d13392d9ff7c811fbdc1325fc2e6ab480371200914a4b549ee7f20f1b2e2f->enter($__internal_039d13392d9ff7c811fbdc1325fc2e6ab480371200914a4b549ee7f20f1b2e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        // line 12
        echo "
    ";
        // line 13
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) : (""))) {
            // line 14
            echo "        ";
            echo "Recent modifications";
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.last-modified", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
    ";
        }
        // line 18
        echo "
";
        
        $__internal_039d13392d9ff7c811fbdc1325fc2e6ab480371200914a4b549ee7f20f1b2e2f->leave($__internal_039d13392d9ff7c811fbdc1325fc2e6ab480371200914a4b549ee7f20f1b2e2f_prof);

    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_1fc46a16258a5fc5019ea1b2ee5c0d18bc4275eac126ff537fa91a25d6b55152 = $this->env->getExtension("native_profiler");
        $__internal_1fc46a16258a5fc5019ea1b2ee5c0d18bc4275eac126ff537fa91a25d6b55152->enter($__internal_1fc46a16258a5fc5019ea1b2ee5c0d18bc4275eac126ff537fa91a25d6b55152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 22
        echo "
    ";
        // line 23
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-lastmodified.twig", 23);
        // line 24
        echo "    ";
        $context["__internal_5094186559eb476f65372a5de2d134ac95e90dd7f846687ac70be31c2dde9baa"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-lastmodified.twig", 24);
        // line 25
        echo "    ";
        $context["__internal_0058b17b988406ea1d0fc0a1b2a3a1cd09be9bfbcc9bb0144f7d232d7a7bbf6f"] = $this->loadTemplate("@bolt/changelog/_macros.twig", "@bolt/components/panel-lastmodified.twig", 25);
        // line 26
        echo "
    <ul>
        ";
        // line 28
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array(), "any", true, true)) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["index"] => $context["entry"]) {
                // line 30
                echo "                <li>
                    ";
                // line 31
                if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) : (""))) {
                    // line 32
                    echo "                        ";
                    $context["title"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_name", array());
                    // line 33
                    echo "                    ";
                } else {
                    // line 34
                    echo "                        ";
                    if ($this->getAttribute($context["entry"], "title", array())) {
                        // line 35
                        echo "                            ";
                        $context["title"] = $context["macro"]->getcontentlink_by_id($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $this->getAttribute($context["entry"], "title", array()), $this->getAttribute($context["entry"], "contentid", array()));
                        // line 36
                        echo "                        ";
                    } else {
                        // line 37
                        echo "                            ";
                        $context["title"] = twig_replace_filter("%name% № %id%", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_name", array()), "%id%" => $this->getAttribute($context["entry"], "contentid", array())));
                        // line 38
                        echo "                        ";
                    }
                    // line 39
                    echo "                        № ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "contentid", array()), "html", null, true);
                    echo ".
                    ";
                }
                // line 41
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
                    ";
                // line 42
                echo $context["__internal_0058b17b988406ea1d0fc0a1b2a3a1cd09be9bfbcc9bb0144f7d232d7a7bbf6f"]->getchangelog_mutation($this->getAttribute($context["entry"], "mutation_type", array()));
                echo "
                    ";
                // line 43
                echo $this->env->getExtension('Bolt')->trans("general.phrase.by");
                echo " <em>";
                echo $context["macro"]->getuserlink((($this->getAttribute($context["entry"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "ownerid", array()), "")) : ("")));
                echo "</em>
                    <small>(";
                // line 44
                echo $context["__internal_5094186559eb476f65372a5de2d134ac95e90dd7f846687ac70be31c2dde9baa"]->getbuic_moment($this->getAttribute($context["entry"], "date", array()));
                echo ")</small>
                    <small><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changelogrecordsingle", array("contenttype" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute($context["entry"], "contentid", array()), "id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">view</a></small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 48
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        } else {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "latest", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 52
                echo "                <li>
                    № ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "id", array()), "html", null, true);
                echo ".
                    ";
                // line 54
                echo $context["macro"]->getcontentlink($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $context["content"]);
                echo "
                    <small>(";
                // line 55
                echo $context["__internal_5094186559eb476f65372a5de2d134ac95e90dd7f846687ac70be31c2dde9baa"]->getbuic_moment($this->getAttribute($context["content"], "datechanged", array()));
                echo ")</small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 58
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        ";
        }
        // line 61
        echo "    </ul>
    ";
        // line 62
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array(), "any", true, true) && $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentid", array())) && $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) {
            // line 63
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changelogrecordall", array("contenttype" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentid", array()))), "html", null, true);
            echo "\">
            ";
            // line 64
            echo $this->env->getExtension('Bolt')->trans("general.phrase.full-list-ellipsis");
            echo "
        </a>
    ";
        }
        // line 67
        echo "
";
        
        $__internal_1fc46a16258a5fc5019ea1b2ee5c0d18bc4275eac126ff537fa91a25d6b55152->leave($__internal_1fc46a16258a5fc5019ea1b2ee5c0d18bc4275eac126ff537fa91a25d6b55152_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-lastmodified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 67,  239 => 64,  234 => 63,  232 => 62,  229 => 61,  226 => 60,  217 => 58,  209 => 55,  205 => 54,  201 => 53,  198 => 52,  192 => 51,  189 => 50,  180 => 48,  172 => 45,  168 => 44,  162 => 43,  158 => 42,  153 => 41,  147 => 39,  144 => 38,  141 => 37,  138 => 36,  135 => 35,  132 => 34,  129 => 33,  126 => 32,  124 => 31,  121 => 30,  115 => 29,  113 => 28,  109 => 26,  106 => 25,  103 => 24,  101 => 23,  98 => 22,  92 => 21,  84 => 18,  78 => 16,  72 => 14,  70 => 13,  67 => 12,  61 => 11,  49 => 9,  37 => 7,  11 => 5,);
    }
}
/* {##*/
/*  # Sidebar-Panel: Displays recent modifications or last modified contenttypes*/
/*  # (Usage Example: Content-editor)*/
/*  #}*/
/* {% extends '@bolt/_base/_panel.twig' %}*/
/* */
/* {% block panel_class 'panel-lastmodified' %}*/
/* */
/* {% block panel_icon 'fa-clock-o' %}*/
/* */
/* {% block panel_head %}*/
/* */
/*     {% if context.filtered|default %}*/
/*         {{ 'Recent modifications' }}*/
/*     {% else %}*/
/*         {{ __('contenttypes.generic.last-modified', {'%contenttypes%': context.contenttype.slug}) }}*/
/*     {% endif %}*/
/* */
/* {% endblock panel_head %}*/
/* */
/* {% block panel_body %}*/
/* */
/*     {% import '@bolt/_macro/_macro.twig' as macro %}*/
/*     {% from '@bolt/_buic/_moment.twig' import buic_moment %}*/
/*     {% from '@bolt/changelog/_macros.twig' import changelog_mutation %}*/
/* */
/*     <ul>*/
/*         {% if context.changelog is defined %}*/
/*             {% for index, entry in context.changelog %}*/
/*                 <li>*/
/*                     {% if context.filtered|default %}*/
/*                         {% set title = context.contenttype.singular_name %}*/
/*                     {% else %}*/
/*                         {% if entry.title %}*/
/*                             {% set title = macro.contentlink_by_id(context.contenttype, entry.title, entry.contentid) %}*/
/*                         {% else %}*/
/*                             {% set title = '%name% № %id%'|replace({'%name%': context.contenttype.singular_name, '%id%': entry.contentid}) %}*/
/*                         {% endif %}*/
/*                         № {{ entry.contentid }}.*/
/*                     {% endif %}*/
/*                     {{ title }}*/
/*                     {{ changelog_mutation(entry.mutation_type) }}*/
/*                     {{ __('general.phrase.by') }} <em>{{ macro.userlink(entry.ownerid|default('')) }}</em>*/
/*                     <small>({{ buic_moment(entry.date) }})</small>*/
/*                     <small><a href="{{ path('changelogrecordsingle', {'contenttype': context.contenttype.slug, 'contentid': entry.contentid, 'id': entry.id}) }}">view</a></small>*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li><em>{{ __('contenttypes.generic.no-latest', {'%contenttype%': context.contenttype.slug}) }}.</em></li>*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             {% for content in context.latest %}*/
/*                 <li>*/
/*                     № {{ content.id }}.*/
/*                     {{ macro.contentlink(context.contenttype, content) }}*/
/*                     <small>({{ buic_moment(content.datechanged) }})</small>*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li><em>{{ __('contenttypes.generic.no-latest', {'%contenttype%': context.contenttype.slug}) }}.</em></li>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </ul>*/
/*     {% if context.changelog is defined and context.contentid and context.filtered %}*/
/*         <a href="{{ path('changelogrecordall', {'contenttype': context.contenttype.slug, 'contentid': context.contentid}) }}">*/
/*             {{ __('general.phrase.full-list-ellipsis') }}*/
/*         </a>*/
/*     {% endif %}*/
/* */
/* {% endblock panel_body %}*/
/* */
