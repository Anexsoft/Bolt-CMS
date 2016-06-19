<?php

/* @bolt/editcontent/editcontent.twig */
class __TwigTemplate_6c7c75c6eaa51b75ba8a0333830eafda7ad8707ecd7e83194800c55bd17a8ef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/editcontent/editcontent.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
            'page_main_extra_content' => array($this, 'block_page_main_extra_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa3be86636f534c7b205f36f33033eb8c03fc0574187a55aeb1999dcde581fd4 = $this->env->getExtension("native_profiler");
        $__internal_aa3be86636f534c7b205f36f33033eb8c03fc0574187a55aeb1999dcde581fd4->enter($__internal_aa3be86636f534c7b205f36f33033eb8c03fc0574187a55aeb1999dcde581fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/editcontent.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/editcontent.twig", 3);
        // line 4
        $context["__internal_88531da216ea92f23d287b69136faee46374703826437172d4c225f57365c122"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/editcontent.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa3be86636f534c7b205f36f33033eb8c03fc0574187a55aeb1999dcde581fd4->leave($__internal_aa3be86636f534c7b205f36f33033eb8c03fc0574187a55aeb1999dcde581fd4_prof);

    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_1398096b370b741e94357f34767300f22134cdad4521c8a6d2df40795b52755e = $this->env->getExtension("native_profiler");
        $__internal_1398096b370b741e94357f34767300f22134cdad4521c8a6d2df40795b52755e->enter($__internal_1398096b370b741e94357f34767300f22134cdad4521c8a6d2df40795b52755e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Content/*";
        
        $__internal_1398096b370b741e94357f34767300f22134cdad4521c8a6d2df40795b52755e->leave($__internal_1398096b370b741e94357f34767300f22134cdad4521c8a6d2df40795b52755e_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d7b1241c500a5e9cfdc13a32d00944d2e86aac06c0993d84da7b0149ac731457 = $this->env->getExtension("native_profiler");
        $__internal_d7b1241c500a5e9cfdc13a32d00944d2e86aac06c0993d84da7b0149ac731457->enter($__internal_d7b1241c500a5e9cfdc13a32d00944d2e86aac06c0993d84da7b0149ac731457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 11
        echo "    ";
        $context["contenttype"] = array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()));
        // line 12
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "title", array()))) {
            // line 13
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.edit", (isset($context["contenttype"]) ? $context["contenttype"] : null));
            echo "
    ";
        } else {
            // line 15
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", (isset($context["contenttype"]) ? $context["contenttype"] : null));
            echo "
    ";
        }
        
        $__internal_d7b1241c500a5e9cfdc13a32d00944d2e86aac06c0993d84da7b0149ac731457->leave($__internal_d7b1241c500a5e9cfdc13a32d00944d2e86aac06c0993d84da7b0149ac731457_prof);

    }

    // line 19
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6ffce725e755332df0a39334d597de5f8eb57ea35f9bdefb528ddb44ced53492 = $this->env->getExtension("native_profiler");
        $__internal_6ffce725e755332df0a39334d597de5f8eb57ea35f9bdefb528ddb44ced53492->enter($__internal_6ffce725e755332df0a39334d597de5f8eb57ea35f9bdefb528ddb44ced53492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo twig_escape_filter($this->env, strip_tags((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "title", array()), "")) : (""))), "html", null, true);
        
        $__internal_6ffce725e755332df0a39334d597de5f8eb57ea35f9bdefb528ddb44ced53492->leave($__internal_6ffce725e755332df0a39334d597de5f8eb57ea35f9bdefb528ddb44ced53492_prof);

    }

    // line 22
    public function block_messages($context, array $blocks = array())
    {
        $__internal_5b1c93b92b1716cc0a7fad9015ec8d8fce1e729d416a1ad1a36e7308c732fd2e = $this->env->getExtension("native_profiler");
        $__internal_5b1c93b92b1716cc0a7fad9015ec8d8fce1e729d416a1ad1a36e7308c732fd2e->enter($__internal_5b1c93b92b1716cc0a7fad9015ec8d8fce1e729d416a1ad1a36e7308c732fd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo "";
        
        $__internal_5b1c93b92b1716cc0a7fad9015ec8d8fce1e729d416a1ad1a36e7308c732fd2e->leave($__internal_5b1c93b92b1716cc0a7fad9015ec8d8fce1e729d416a1ad1a36e7308c732fd2e_prof);

    }

    // line 24
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_796a393fa13d926cb09e6e836d7f4680929b21e52b21bd9cb3e413d29e876d1b = $this->env->getExtension("native_profiler");
        $__internal_796a393fa13d926cb09e6e836d7f4680929b21e52b21bd9cb3e413d29e876d1b->enter($__internal_796a393fa13d926cb09e6e836d7f4680929b21e52b21bd9cb3e413d29e876d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 25
        echo "    ";
        $context["status_names"] = array("published" => $this->env->getExtension('Bolt')->trans("general.phrase.published"), "held" => $this->env->getExtension('Bolt')->trans("general.phrase.not-published"), "timed" => $this->env->getExtension('Bolt')->trans("general.phrase.publish-timed"), "draft" => $this->env->getExtension('Bolt')->trans("general.phrase.draft"));
        // line 31
        echo "
    ";
        // line 32
        ob_start();
        echo $context["__internal_88531da216ea92f23d287b69136faee46374703826437172d4c225f57365c122"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
        $context["dateChanged"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    ";
        // line 34
        $context["bind_data"] = array("savedon" => ((($this->env->getExtension('Bolt')->trans("general.phrase.saved-on-colon") . " <strong></strong> <small>(") .         // line 35
(isset($context["dateChanged"]) ? $context["dateChanged"] : null)) . ")</small></p>"), "newRecord" => ((($this->getAttribute($this->getAttribute(        // line 36
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()) != 0)) ? (false) : (true)), "msgNotSaved" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.saving-impossible", array("%contenttype%" => $this->getAttribute($this->getAttribute(        // line 37
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()))), "hasGroups" => $this->getAttribute($this->getAttribute(        // line 38
(isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array()), "singularSlug" => $this->getAttribute($this->getAttribute(        // line 39
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()));
        // line 41
        echo "
    ";
        // line 42
        $context["attr_form"] = array("_bind" => array(0 => "editcontent", 1 =>         // line 43
(isset($context["bind_data"]) ? $context["bind_data"] : null)), "class" => ("form-horizontal" . (($this->getAttribute($this->getAttribute(        // line 44
(isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) ? (" tab-content") : (""))), "enctype" => "multipart/form-data", "id" => "editcontent", "method" => "post");
        // line 49
        echo "
    ";
        // line 50
        $context["attributes"] = array("hid_editreferrer" => array("name_id" => "editreferrer", "type" => "hidden", "value" => ((        // line 54
array_key_exists("editreferrer", $context)) ? (_twig_default_filter((isset($context["editreferrer"]) ? $context["editreferrer"] : null), "")) : (""))), "hid_contenttype" => array("name_id" => "contenttype", "type" => "hidden", "value" => $this->getAttribute($this->getAttribute(        // line 60
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        // line 63
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 67
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            ";
        // line 69
        echo $this->env->getExtension('Bolt')->widgets("editcontent_below_header", "backend");
        echo "

            ";
        // line 72
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 73
            echo "                <ul class=\"nav nav-tabs\" id=\"filtertabs\">
                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "groups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 75
                echo "                        <li";
                echo (($this->getAttribute($context["group"], "is_active", array())) ? (" class=\"active\"") : (""));
                echo " id=\"tabindicator-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\">
                            <a href=\"#";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                </ul>
            ";
        }
        // line 81
        echo "
            <form";
        // line 82
        echo $context["macro"]->getattr((isset($context["attr_form"]) ? $context["attr_form"] : null));
        echo ">
                ";
        // line 83
        echo twig_include($this->env, $context, "@bolt/_sub/_csrf_token.twig");
        echo "

                <input";
        // line 85
        echo $context["macro"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_editreferrer", array()));
        echo ">
                <input";
        // line 86
        echo $context["macro"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_contenttype", array()));
        echo ">

                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "groups", array()));
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
        foreach ($context['_seq'] as $context["group_name"] => $context["group"]) {
            // line 89
            echo "
                    ";
            // line 90
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
                // line 91
                echo "                        <div class=\"tab-pane";
                echo (($this->getAttribute($context["group"], "is_active", array())) ? (" active") : (""));
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\">
                    ";
            }
            // line 93
            echo "
                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 95
                echo "
                        ";
                // line 96
                if (($context["key"] == "*relations")) {
                    // line 97
                    echo "                            ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/_relations.twig");
                    echo "

                        ";
                } elseif ((                // line 99
$context["key"] == "*taxonomy")) {
                    // line 100
                    echo "                            ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/_taxonomies.twig");
                    echo "

                        ";
                } elseif ((                // line 102
$context["key"] == "*meta")) {
                    // line 103
                    echo "                            <div data-bolt-fieldset=\"meta\">
                                ";
                    // line 104
                    echo twig_include($this->env, $context, "@bolt/editcontent/fields/_meta.twig");
                    echo "
                            </div>

                        ";
                } elseif ((                // line 107
$context["key"] == "*template")) {
                    // line 108
                    echo "                            ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/_templatefields.twig");
                    echo "

                        ";
                } else {
                    // line 111
                    echo "                            ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/_field.twig");
                    echo "
                        ";
                }
                // line 113
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "
                    ";
            // line 116
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
                // line 117
                echo "                        </div>
                    ";
            }
            // line 119
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
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
                <input type=\"hidden\" name=\"_live-editor-preview\" value=\"\"/>

                ";
        // line 124
        echo twig_include($this->env, $context, "@bolt/editcontent/_buttons.twig");
        echo "
            </form>

            ";
        // line 127
        echo twig_include($this->env, $context, "@bolt/editcontent/_includes-data.twig");
        echo "

            ";
        // line 129
        echo $this->env->getExtension('Bolt')->widgets("editcontent_bottom", "backend");
        echo "

        </div>

        <aside class=\"col-md-4 hidden-sm\">
            ";
        // line 134
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside.twig");
        echo "
        </aside>
    </div>

";
        
        $__internal_796a393fa13d926cb09e6e836d7f4680929b21e52b21bd9cb3e413d29e876d1b->leave($__internal_796a393fa13d926cb09e6e836d7f4680929b21e52b21bd9cb3e413d29e876d1b_prof);

    }

    // line 140
    public function block_page_main_extra_content($context, array $blocks = array())
    {
        $__internal_23143f1e73d99e45b371161dc15184a70700ba246bf9affad7902b660cc1d8e9 = $this->env->getExtension("native_profiler");
        $__internal_23143f1e73d99e45b371161dc15184a70700ba246bf9affad7902b660cc1d8e9->enter($__internal_23143f1e73d99e45b371161dc15184a70700ba246bf9affad7902b660cc1d8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main_extra_content"));

        // line 141
        echo "    ";
        echo twig_include($this->env, $context, "@bolt/editcontent/_live-editor.twig");
        echo "
";
        
        $__internal_23143f1e73d99e45b371161dc15184a70700ba246bf9affad7902b660cc1d8e9->leave($__internal_23143f1e73d99e45b371161dc15184a70700ba246bf9affad7902b660cc1d8e9_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/editcontent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 141,  388 => 140,  376 => 134,  368 => 129,  363 => 127,  357 => 124,  352 => 121,  337 => 119,  333 => 117,  331 => 116,  328 => 115,  313 => 113,  307 => 111,  300 => 108,  298 => 107,  292 => 104,  289 => 103,  287 => 102,  281 => 100,  279 => 99,  273 => 97,  271 => 96,  268 => 95,  251 => 94,  248 => 93,  240 => 91,  238 => 90,  235 => 89,  218 => 88,  213 => 86,  209 => 85,  204 => 83,  200 => 82,  197 => 81,  193 => 79,  182 => 76,  175 => 75,  171 => 74,  168 => 73,  165 => 72,  160 => 69,  155 => 67,  149 => 63,  147 => 60,  146 => 54,  145 => 50,  142 => 49,  140 => 44,  139 => 43,  138 => 42,  135 => 41,  133 => 39,  132 => 38,  131 => 37,  130 => 36,  129 => 35,  128 => 34,  125 => 33,  121 => 32,  118 => 31,  115 => 25,  109 => 24,  97 => 22,  85 => 19,  74 => 15,  68 => 13,  65 => 12,  62 => 11,  56 => 10,  44 => 8,  37 => 6,  35 => 4,  33 => 3,  11 => 6,);
    }
}
/* {# Page: NavSecondary > Content ... > Edit #}*/
/* */
/* {% import '@bolt/_macro/_macro.twig' as macro %}*/
/* {% from '@bolt/_buic/_moment.twig' import buic_moment %}*/
/* */
/* {% extends '@bolt/_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Content/*' %}*/
/* */
/* {% block page_title %}*/
/*     {% set contenttype = {'%contenttype%': context.contenttype.slug} %}*/
/*     {% if context.content.title is not empty %}*/
/*         {{ __('contenttypes.generic.edit', contenttype) }}*/
/*     {% else %}*/
/*         {{ __('contenttypes.generic.new', contenttype) }}*/
/*     {% endif %}*/
/* {% endblock page_title %}*/
/* */
/* {% block page_subtitle context.content.title|default('')|striptags %}*/
/* */
/* {# clear default messages, because we use them in a different spot, in this template #}*/
/* {% block messages "" %}*/
/* */
/* {% block page_main %}*/
/*     {% set status_names = {*/
/*         'published': __('general.phrase.published'),*/
/*         'held':      __('general.phrase.not-published'),*/
/*         'timed':     __('general.phrase.publish-timed'),*/
/*         'draft':     __('general.phrase.draft')*/
/*     } %}*/
/* */
/*     {% set dateChanged %}{{ buic_moment(context.content.datechanged) }}{% endset %}*/
/* */
/*     {% set bind_data = {*/
/*         savedon:        __('general.phrase.saved-on-colon') ~ ' <strong></strong> <small>(' ~ dateChanged ~ ')</small></p>',*/
/*         newRecord:      context.content.id != 0 ? false : true,*/
/*         msgNotSaved:    __('contenttypes.generic.saving-impossible', {'%contenttype%': context.contenttype.slug}),*/
/*         hasGroups:      context.has.tabs,*/
/*         singularSlug:   context.contenttype.singular_slug,*/
/*     } %}*/
/* */
/*     {% set attr_form = {*/
/*         _bind:   ['editcontent', bind_data],*/
/*         class:   'form-horizontal' ~ (context.has.tabs ? ' tab-content' : ''),*/
/*         enctype: 'multipart/form-data',*/
/*         id:      'editcontent',*/
/*         method:  'post',*/
/*     } %}*/
/* */
/*     {% set attributes = {*/
/*         hid_editreferrer: {*/
/*             name_id:  'editreferrer',*/
/*             type:     'hidden',*/
/*             value:    editreferrer|default(''),*/
/*         },*/
/* */
/*         hid_contenttype: {*/
/*             name_id:   'contenttype',*/
/*             type:      'hidden',*/
/*             value:     context.contenttype.slug,*/
/*         },*/
/*     } %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/* */
/*             {{ include('@bolt/_sub/_messages.twig') }}*/
/* */
/*             {{ widgets('editcontent_below_header', 'backend') }}*/
/* */
/*             {# Only if we have grouping tabs. #}*/
/*             {% if context.has.tabs %}*/
/*                 <ul class="nav nav-tabs" id="filtertabs">*/
/*                     {% for group in context.groups %}*/
/*                         <li{{ group.is_active ? ' class="active"' : '' }} id="tabindicator-{{ group.id }}">*/
/*                             <a href="#{{ group.id }}" data-toggle="tab">{{ group.label }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/* */
/*             <form{{ macro.attr(attr_form) }}>*/
/*                 {{ include('@bolt/_sub/_csrf_token.twig') }}*/
/* */
/*                 <input{{ macro.attr(attributes.hid_editreferrer) }}>*/
/*                 <input{{ macro.attr(attributes.hid_contenttype) }}>*/
/* */
/*                 {% for group_name, group in context.groups %}*/
/* */
/*                     {% if context.has.tabs %}*/
/*                         <div class="tab-pane{{ group.is_active ? ' active' : '' }}" id="{{ group.id }}">*/
/*                     {% endif %}*/
/* */
/*                     {% for key in group.fields %}*/
/* */
/*                         {% if key == '*relations' %}*/
/*                             {{ include('@bolt/editcontent/_relations.twig') }}*/
/* */
/*                         {% elseif key == '*taxonomy' %}*/
/*                             {{ include('@bolt/editcontent/_taxonomies.twig') }}*/
/* */
/*                         {% elseif key == '*meta' %}*/
/*                             <div data-bolt-fieldset="meta">*/
/*                                 {{ include('@bolt/editcontent/fields/_meta.twig') }}*/
/*                             </div>*/
/* */
/*                         {% elseif key == '*template' %}*/
/*                             {{ include('@bolt/editcontent/_templatefields.twig') }}*/
/* */
/*                         {% else %}*/
/*                             {{ include('@bolt/editcontent/_field.twig') }}*/
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     {% if context.has.tabs %}*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/* */
/*                 <input type="hidden" name="_live-editor-preview" value=""/>*/
/* */
/*                 {{ include('@bolt/editcontent/_buttons.twig') }}*/
/*             </form>*/
/* */
/*             {{ include('@bolt/editcontent/_includes-data.twig') }}*/
/* */
/*             {{ widgets('editcontent_bottom', 'backend') }}*/
/* */
/*         </div>*/
/* */
/*         <aside class="col-md-4 hidden-sm">*/
/*             {{ include('@bolt/editcontent/_aside.twig') }}*/
/*         </aside>*/
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
/* {% block page_main_extra_content %}*/
/*     {{ include('@bolt/editcontent/_live-editor.twig') }}*/
/* {% endblock %}*/
/* */
