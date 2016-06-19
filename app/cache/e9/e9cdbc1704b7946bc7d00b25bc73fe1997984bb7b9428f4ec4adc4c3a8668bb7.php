<?php

/* @bolt/_buic/_select.twig */
class __TwigTemplate_c7c957ced8b3027e4cbf0cddd839e91a550e24d4b5f7143ef56782c73ea48f33 extends Twig_Template
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
        $__internal_47701932df1196b069b6f0500c1765946dc5358a80811f8b85fd54b702660c0d = $this->env->getExtension("native_profiler");
        $__internal_47701932df1196b069b6f0500c1765946dc5358a80811f8b85fd54b702660c0d->enter($__internal_47701932df1196b069b6f0500c1765946dc5358a80811f8b85fd54b702660c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_select.twig"));

        
        $__internal_47701932df1196b069b6f0500c1765946dc5358a80811f8b85fd54b702660c0d->leave($__internal_47701932df1196b069b6f0500c1765946dc5358a80811f8b85fd54b702660c0d_prof);

    }

    // line 23
    public function getbuic_select($__opt__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4da4002fc9c254123c024d0392bfb34a98f2e1848d89b2d31caf34bedba5d813 = $this->env->getExtension("native_profiler");
            $__internal_4da4002fc9c254123c024d0392bfb34a98f2e1848d89b2d31caf34bedba5d813->enter($__internal_4da4002fc9c254123c024d0392bfb34a98f2e1848d89b2d31caf34bedba5d813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_select"));

            // line 24
            echo "    ";
            ob_start();
            // line 25
            echo "        ";
            $context["options"] = (($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()), array())) : (array()));
            // line 26
            echo "        ";
            $context["multiple"] = (($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "multiple", array()), false)) : (false));
            // line 27
            echo "
        ";
            // line 29
            echo "        ";
            if ( !(isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 30
                echo "            ";
                $context["has_empty_val"] = false;
                // line 31
                echo "            ";
                $context["has_selected_val"] = false;
                // line 32
                echo "
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 34
                    echo "                ";
                    if (($this->getAttribute($context["option"], "value", array()) == "")) {
                        // line 35
                        echo "                    ";
                        $context["has_empty_val"] = true;
                        // line 36
                        echo "                ";
                    }
                    // line 37
                    echo "                ";
                    if ($this->getAttribute($context["option"], "selected", array())) {
                        // line 38
                        echo "                    ";
                        $context["has_selected_val"] = true;
                        // line 39
                        echo "                ";
                    }
                    // line 40
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "
            ";
                // line 42
                if ( !(isset($context["has_empty_val"]) ? $context["has_empty_val"] : null)) {
                    // line 43
                    echo "                ";
                    $context["options"] = twig_array_merge(array(0 => array("value" => "", "text" => "", "selected" =>  !(isset($context["has_selected_val"]) ? $context["has_selected_val"] : null))), (isset($context["options"]) ? $context["options"] : null));
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "
        ";
            // line 47
            $context["conf"] = array("all" => (($this->getAttribute(            // line 48
(isset($context["opt"]) ? $context["opt"] : null), "all", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "all", array()), false)) : (false)), "class" => (($this->getAttribute(            // line 49
(isset($context["opt"]) ? $context["opt"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array()))) : ("")), "clear" => (($this->getAttribute(            // line 50
(isset($context["opt"]) ? $context["opt"] : null), "clear", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "clear", array()), false)) : (false)), "disabled" => (($this->getAttribute(            // line 51
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "id" => (($this->getAttribute(            // line 52
(isset($context["opt"]) ? $context["opt"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "id", array()), (($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array"), "")) : ("")))) : ((($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array"), "")) : ("")))), "multiple" =>             // line 53
(isset($context["multiple"]) ? $context["multiple"] : null), "name" => (($this->getAttribute(            // line 54
(isset($context["opt"]) ? $context["opt"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name", array()), (($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array"), "")) : ("")))) : ((($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array"), "")) : ("")))), "options" =>             // line 55
(isset($context["options"]) ? $context["options"] : null), "required" => (($this->getAttribute(            // line 56
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)));
            // line 58
            echo "
        ";
            // line 59
            $context["attributes"] = array("disabled" => $this->getAttribute(            // line 60
(isset($context["conf"]) ? $context["conf"] : null), "disabled", array()), "id" => $this->getAttribute(            // line 61
(isset($context["conf"]) ? $context["conf"] : null), "id", array()), "multiple" => $this->getAttribute(            // line 62
(isset($context["conf"]) ? $context["conf"] : null), "multiple", array()), "name" => $this->getAttribute(            // line 63
(isset($context["conf"]) ? $context["conf"] : null), "name", array()), "required" => $this->getAttribute(            // line 64
(isset($context["conf"]) ? $context["conf"] : null), "required", array()));
            // line 66
            echo "
        <div";
            // line 67
            echo $this->env->getExtension('Bolt')->hclass(array(0 => "buic-select", 1 => $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "class", array())));
            echo " data-bolt-widget=\"buicSelect\">
            <div>
                <div>
                    <select";
            // line 70
            echo $this->env->getExtension('Bolt')->hattr((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
                        ";
            // line 71
            $context["last_optgroup"] = false;
            // line 72
            echo "
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 74
                echo "                            ";
                // line 75
                echo "                            ";
                $context["optgroup"] = (($this->getAttribute($context["option"], "group", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "group", array()), false)) : (false));
                // line 76
                echo "                            ";
                if (((isset($context["optgroup"]) ? $context["optgroup"] : null) != (isset($context["last_optgroup"]) ? $context["last_optgroup"] : null))) {
                    // line 77
                    echo "                                ";
                    if (((isset($context["last_optgroup"]) ? $context["last_optgroup"] : null) != false)) {
                        // line 78
                        echo "                                    </optgroup>
                                ";
                    }
                    // line 80
                    echo "                                ";
                    if (((isset($context["optgroup"]) ? $context["optgroup"] : null) != false)) {
                        // line 81
                        echo "                                    <optgroup label=\"";
                        echo twig_escape_filter($this->env, (isset($context["optgroup"]) ? $context["optgroup"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 83
                    echo "                                ";
                    $context["last_optgroup"] = (isset($context["optgroup"]) ? $context["optgroup"] : null);
                    // line 84
                    echo "                            ";
                }
                // line 85
                echo "
                            ";
                // line 87
                echo "                            ";
                $context["opttext"] = strip_tags((($this->getAttribute($context["option"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "text", array()), $this->getAttribute($context["option"], "value", array()))) : ($this->getAttribute($context["option"], "value", array()))));
                // line 88
                echo "                            ";
                $context["optattr"] = array("value!" => $this->getAttribute(                // line 89
$context["option"], "value", array()), "selected" => (($this->getAttribute(                // line 90
$context["option"], "selected", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "selected", array()), false)) : (false)), "label" => (((($this->getAttribute(                // line 91
$context["option"], "value", array()) == "") && ((isset($context["opttext"]) ? $context["opttext"] : null) == ""))) ? ("–") : (false)));
                // line 93
                echo "                            <option";
                echo $this->env->getExtension('Bolt')->hattr((isset($context["optattr"]) ? $context["optattr"] : null));
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["opttext"]) ? $context["opttext"] : null), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "
                        ";
            // line 97
            echo "                        ";
            if (((isset($context["last_optgroup"]) ? $context["last_optgroup"] : null) != false)) {
                // line 98
                echo "                            </optgroup>
                        ";
            }
            // line 100
            echo "
                    </select>
                </div>
                ";
            // line 103
            if (($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "clear", array()) || $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "all", array()))) {
                // line 104
                echo "                    <div>
                        ";
                // line 105
                if ($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "clear", array())) {
                    // line 106
                    echo "                            <button type=\"button\" class=\"btn select-none\">
                                <span class=\"sr-only\">";
                    // line 107
                    echo $this->env->getExtension('Bolt')->trans("general.phrase.select-none");
                    echo "</span>
                            </button>
                        ";
                }
                // line 110
                echo "                        ";
                if ($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "all", array())) {
                    // line 111
                    echo "                            <button type=\"button\" class=\"btn select-all\">
                                <span class=\"sr-only\">";
                    // line 112
                    echo $this->env->getExtension('Bolt')->trans("general.phrase.select-all");
                    echo "</span>
                            </button>
                        ";
                }
                // line 115
                echo "                    </div>
                ";
            }
            // line 117
            echo "            </div>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_4da4002fc9c254123c024d0392bfb34a98f2e1848d89b2d31caf34bedba5d813->leave($__internal_4da4002fc9c254123c024d0392bfb34a98f2e1848d89b2d31caf34bedba5d813_prof);

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
        return "@bolt/_buic/_select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 117,  250 => 115,  244 => 112,  241 => 111,  238 => 110,  232 => 107,  229 => 106,  227 => 105,  224 => 104,  222 => 103,  217 => 100,  213 => 98,  210 => 97,  207 => 95,  196 => 93,  194 => 91,  193 => 90,  192 => 89,  190 => 88,  187 => 87,  184 => 85,  181 => 84,  178 => 83,  172 => 81,  169 => 80,  165 => 78,  162 => 77,  159 => 76,  156 => 75,  154 => 74,  150 => 73,  147 => 72,  145 => 71,  141 => 70,  135 => 67,  132 => 66,  130 => 64,  129 => 63,  128 => 62,  127 => 61,  126 => 60,  125 => 59,  122 => 58,  120 => 56,  119 => 55,  118 => 54,  117 => 53,  116 => 52,  115 => 51,  114 => 50,  113 => 49,  112 => 48,  111 => 47,  108 => 46,  105 => 45,  102 => 44,  99 => 43,  97 => 42,  94 => 41,  88 => 40,  85 => 39,  82 => 38,  79 => 37,  76 => 36,  73 => 35,  70 => 34,  66 => 33,  63 => 32,  60 => 31,  57 => 30,  54 => 29,  51 => 27,  48 => 26,  45 => 25,  42 => 24,  27 => 23,);
    }
}
/* {##*/
/*  # Renders a select component.*/
/*  #*/
/*  # Options:*/
/*  #    all         false      Add "select all" button.*/
/*  #    class       ''         Classname(s) added to the component container.*/
/*  #    clear       false      Add "clear" button.*/
/*  #    disabled    false      Input is disabled.*/
/*  #    id          ''         Id of the checkbox.*/
/*  #    multiple    false      Multiple selections mode.*/
/*  #    name        required   Name of the checkbox.*/
/*  #    options     []         Array of select options, see below.*/
/*  #    required    false      Input is required.*/
/*  #*/
/*  #    options:     Array of {value: …, text|html…, group: …, selected: …}.*/
/*  #    - value:     option value, required*/
/*  #    - text:      unescaped hatml for option label, if not set <value> is used.*/
/*  #    - group:     Group title or false or not set.*/
/*  #    - selected:  Boolean, not set is false.*/
/*  #*/
/*  # @param array opt Options defining the component*/
/*  #}*/
/* {% macro buic_select(opt) %}*/
/*     {% spaceless %}*/
/*         {% set options = opt.options|default([]) %}*/
/*         {% set multiple = opt.multiple|default(false) %}*/
/* */
/*         {# Add an empty option for non multiple selects if not already there #}*/
/*         {% if not multiple %}*/
/*             {% set has_empty_val = false %}*/
/*             {% set has_selected_val = false %}*/
/* */
/*             {% for option in options %}*/
/*                 {% if option.value == '' %}*/
/*                     {% set has_empty_val = true %}*/
/*                 {% endif %}*/
/*                 {% if option.selected %}*/
/*                     {% set has_selected_val = true %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*             {% if not has_empty_val %}*/
/*                 {% set options = [{value: '', text: '', selected: not has_selected_val}]|merge(options) %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% set conf = {*/
/*             'all':       opt.all|default(false),*/
/*             'class':     opt.class|default(),*/
/*             'clear':     opt.clear|default(false),*/
/*             'disabled':  opt.disabled|default(false),*/
/*             'id':        opt.id|default(opt['name+id']|default('')),*/
/*             'multiple':  multiple,*/
/*             'name':      opt.name|default(opt['name+id']|default('')),*/
/*             'options':   options,*/
/*             'required':  opt.required|default(false),*/
/*         } %}*/
/* */
/*         {% set attributes = {*/
/*             'disabled':     conf.disabled,*/
/*             'id':           conf.id,*/
/*             'multiple':     conf.multiple,*/
/*             'name':         conf.name,*/
/*             'required':     conf.required,*/
/*         } %}*/
/* */
/*         <div{{ hclass(['buic-select', conf.class]) }} data-bolt-widget="buicSelect">*/
/*             <div>*/
/*                 <div>*/
/*                     <select{{ hattr(attributes) }}>*/
/*                         {% set last_optgroup = false %}*/
/* */
/*                         {% for option in conf.options %}*/
/*                             {# optgroup #}*/
/*                             {% set optgroup = option.group|default(false) %}*/
/*                             {% if optgroup != last_optgroup %}*/
/*                                 {% if last_optgroup != false %}*/
/*                                     </optgroup>*/
/*                                 {% endif %}*/
/*                                 {% if optgroup != false %}*/
/*                                     <optgroup label="{{ optgroup }}">*/
/*                                 {% endif %}*/
/*                                 {% set last_optgroup = optgroup %}*/
/*                             {% endif %}*/
/* */
/*                             {# option #}*/
/*                             {% set opttext = option.text|default(option.value)|striptags %}*/
/*                             {% set optattr = {*/
/*                                 'value!':   option.value,*/
/*                                 'selected': option.selected|default(false),*/
/*                                 'label':    option.value == '' and opttext == '' ? '–' : false,*/
/*                             } %}*/
/*                             <option{{ hattr(optattr) }}>{{ opttext }}</option>*/
/*                         {% endfor %}*/
/* */
/*                         {# Close open optgroup #}*/
/*                         {% if last_optgroup != false %}*/
/*                             </optgroup>*/
/*                         {% endif %}*/
/* */
/*                     </select>*/
/*                 </div>*/
/*                 {% if conf.clear or conf.all %}*/
/*                     <div>*/
/*                         {% if conf.clear %}*/
/*                             <button type="button" class="btn select-none">*/
/*                                 <span class="sr-only">{{ __('general.phrase.select-none') }}</span>*/
/*                             </button>*/
/*                         {% endif %}*/
/*                         {% if conf.all %}*/
/*                             <button type="button" class="btn select-all">*/
/*                                 <span class="sr-only">{{ __('general.phrase.select-all') }}</span>*/
/*                             </button>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
