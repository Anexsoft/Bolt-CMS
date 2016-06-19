<?php

/* @bolt/_macro/_macro.twig */
class __TwigTemplate_99632740673ef20d2311162a20f7f0ef15749a585d6ef0e122842f0e74fce3a9 extends Twig_Template
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
        $__internal_542d709fd0a9fd1e6ddbbc005c251ea094fa19c4bf21714ddd8d2a3182243adf = $this->env->getExtension("native_profiler");
        $__internal_542d709fd0a9fd1e6ddbbc005c251ea094fa19c4bf21714ddd8d2a3182243adf->enter($__internal_542d709fd0a9fd1e6ddbbc005c251ea094fa19c4bf21714ddd8d2a3182243adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_macro.twig"));

        // line 14
        echo "
";
        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 63
        echo "
";
        // line 73
        echo "
";
        // line 82
        echo "
";
        // line 157
        echo "
";
        
        $__internal_542d709fd0a9fd1e6ddbbc005c251ea094fa19c4bf21714ddd8d2a3182243adf->leave($__internal_542d709fd0a9fd1e6ddbbc005c251ea094fa19c4bf21714ddd8d2a3182243adf_prof);

    }

    // line 4
    public function getuserlink($__user_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user_id" => $__user_id__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7fbad0d9a9552a01fea236954c53a44f8af91f5daed828e88bd41ea7b9146e61 = $this->env->getExtension("native_profiler");
            $__internal_7fbad0d9a9552a01fea236954c53a44f8af91f5daed828e88bd41ea7b9146e61->enter($__internal_7fbad0d9a9552a01fea236954c53a44f8af91f5daed828e88bd41ea7b9146e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "userlink"));

            // line 5
            echo "    ";
            ob_start();
            // line 6
            echo "        ";
            $context["user"] = $this->env->getExtension('Bolt')->getUser((isset($context["user_id"]) ? $context["user_id"] : null));
            // line 7
            echo "        ";
            if ( !twig_test_empty((isset($context["user"]) ? $context["user"] : null))) {
                // line 8
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array()), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 10
                echo "            ";
                echo $this->env->getExtension('Bolt')->trans("panel.latest-activity.unknown");
                echo "
        ";
            }
            // line 12
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_7fbad0d9a9552a01fea236954c53a44f8af91f5daed828e88bd41ea7b9146e61->leave($__internal_7fbad0d9a9552a01fea236954c53a44f8af91f5daed828e88bd41ea7b9146e61_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getcontentlink_by_id($__contenttype__ = null, $__title__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "title" => $__title__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b235d44332a4102fc25169f7d082810883715b0ac220b3137ba64f0cc4e2e816 = $this->env->getExtension("native_profiler");
            $__internal_b235d44332a4102fc25169f7d082810883715b0ac220b3137ba64f0cc4e2e816->enter($__internal_b235d44332a4102fc25169f7d082810883715b0ac220b3137ba64f0cc4e2e816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "contentlink_by_id"));

            // line 19
            echo "    ";
            ob_start();
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array()), "id" => (isset($context["content_id"]) ? $context["content_id"] : null))), "html", null, true);
            echo "\">";
            // line 21
            echo _twig_default_filter($this->env->getExtension('Bolt')->excerpt((isset($context["title"]) ? $context["title"] : null), 70), (("<em>(" . $this->env->getExtension('Bolt')->trans("general.phrase.no-title")) . ")</em>"));
            // line 22
            echo "</a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_b235d44332a4102fc25169f7d082810883715b0ac220b3137ba64f0cc4e2e816->leave($__internal_b235d44332a4102fc25169f7d082810883715b0ac220b3137ba64f0cc4e2e816_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcontentlink($__contenttype__ = null, $__content__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "content" => $__content__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_66fec19a3302e248fd9adbc21f6efea7e32448f7316233fe058cc3d6ad0f19b5 = $this->env->getExtension("native_profiler");
            $__internal_66fec19a3302e248fd9adbc21f6efea7e32448f7316233fe058cc3d6ad0f19b5->enter($__internal_66fec19a3302e248fd9adbc21f6efea7e32448f7316233fe058cc3d6ad0f19b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "contentlink"));

            // line 30
            echo "    ";
            $context["crosslinks"] = $this;
            // line 31
            echo "    ";
            $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(0 => true), "method");
            // line 32
            echo "    ";
            echo $context["crosslinks"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()));
            echo "
";
            
            $__internal_66fec19a3302e248fd9adbc21f6efea7e32448f7316233fe058cc3d6ad0f19b5->leave($__internal_66fec19a3302e248fd9adbc21f6efea7e32448f7316233fe058cc3d6ad0f19b5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getattr($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a95b49ab67d295f7cfb55dd0a8ef1fc603f543a22d7a944eb9b1298768266ef2 = $this->env->getExtension("native_profiler");
            $__internal_a95b49ab67d295f7cfb55dd0a8ef1fc603f543a22d7a944eb9b1298768266ef2->enter($__internal_a95b49ab67d295f7cfb55dd0a8ef1fc603f543a22d7a944eb9b1298768266ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attr"));

            // line 39
            echo "    ";
            ob_start();
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["value"]) {
                // line 41
                echo "            ";
                if (($context["attrname"] == "value")) {
                    // line 42
                    echo "                value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
            ";
                } elseif ( !twig_test_empty(                // line 43
$context["value"])) {
                    // line 44
                    echo "                ";
                    if (twig_in_filter($context["attrname"], array(0 => "required", 1 => "disabled", 2 => "selected", 3 => "autofocus", 4 => "multiple", 5 => "readonly"))) {
                        // line 45
                        echo "                    ";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 46
$context["attrname"] == "name_id")) {
                        // line 47
                        echo "                    name=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 48
$context["attrname"] == "class")) {
                        // line 49
                        echo "                    class=\"";
                        echo twig_escape_filter($this->env, trim($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 50
$context["attrname"] == "style")) {
                        // line 51
                        echo "                    style=\"";
                        echo twig_escape_filter($this->env, trim($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 52
$context["attrname"] == "checked")) {
                        // line 53
                        echo "                    ";
                        if (($context["value"] != false)) {
                            echo "checked=\"checked\"";
                        }
                        // line 54
                        echo "                ";
                    } elseif (($context["attrname"] == "_bind")) {
                        // line 55
                        echo "                    data-bind=\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(array("bind" => $this->getAttribute($context["value"], 0, array(), "array")), (($this->getAttribute($context["value"], 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["value"], 1, array(), "array"), array())) : (array())))), "html", null, true);
                        echo "\"
                ";
                    } else {
                        // line 57
                        echo "                    ";
                        echo twig_escape_filter($this->env, twig_replace_filter($context["attrname"], array("_" => "-")), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    }
                    // line 59
                    echo "            ";
                }
                // line 60
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_a95b49ab67d295f7cfb55dd0a8ef1fc603f543a22d7a944eb9b1298768266ef2->leave($__internal_a95b49ab67d295f7cfb55dd0a8ef1fc603f543a22d7a944eb9b1298768266ef2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function getactionform($__content__ = null, $__action__ = null, $__icon__ = null, $__text__ = null, $__confirmation_text__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "content" => $__content__,
            "action" => $__action__,
            "icon" => $__icon__,
            "text" => $__text__,
            "confirmation_text" => $__confirmation_text__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2c5fedfe16c71e64ac523e6033bd9fe96441c03c1e0d0cfcd3b8f7305a469190 = $this->env->getExtension("native_profiler");
            $__internal_2c5fedfe16c71e64ac523e6033bd9fe96441c03c1e0d0cfcd3b8f7305a469190->enter($__internal_2c5fedfe16c71e64ac523e6033bd9fe96441c03c1e0d0cfcd3b8f7305a469190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "actionform"));

            // line 68
            echo "    ";
            if (((isset($context["action"]) ? $context["action"] : null) == "held")) {
                // line 69
                echo "        ";
                $context["action"] = "depublish";
                // line 70
                echo "    ";
            }
            // line 71
            echo "    <a href=\"#\" data-listing-cmd=\"record:";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\"><i class=\"fa ";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\"></i> ";
            echo $this->env->getExtension('Bolt')->trans((isset($context["text"]) ? $context["text"] : null));
            echo "</a>
";
            
            $__internal_2c5fedfe16c71e64ac523e6033bd9fe96441c03c1e0d0cfcd3b8f7305a469190->leave($__internal_2c5fedfe16c71e64ac523e6033bd9fe96441c03c1e0d0cfcd3b8f7305a469190_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 77
    public function gettypepopover($__types__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $__types__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_405d37ffd199473d258e20c828563c19c9383fe5ad31fe293ab8fdeb42554a8d = $this->env->getExtension("native_profiler");
            $__internal_405d37ffd199473d258e20c828563c19c9383fe5ad31fe293ab8fdeb42554a8d->enter($__internal_405d37ffd199473d258e20c828563c19c9383fe5ad31fe293ab8fdeb42554a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "typepopover"));

            // line 78
            echo "    ";
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/accept_file_types"), "method")));
            // line 79
            echo "    ";
            $context["text"] = ((($this->env->getExtension('Bolt')->trans("field.general.allowed-filetypes") . "<code>") . twig_join_filter((isset($context["types"]) ? $context["types"] : null), "</code>, <code>")) . "</code>.");
            // line 80
            echo "    <span class=\"label info-pop\" data-title=\"\" data-html=\"true\" data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.types");
            echo "</span>
";
            
            $__internal_405d37ffd199473d258e20c828563c19c9383fe5ad31fe293ab8fdeb42554a8d->leave($__internal_405d37ffd199473d258e20c828563c19c9383fe5ad31fe293ab8fdeb42554a8d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 97
    public function getinput_datetime($__opt__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_64ee2ce43eb8574dc1d5b746976a9e5f1c4a580908d1f26de8e549a880391bff = $this->env->getExtension("native_profiler");
            $__internal_64ee2ce43eb8574dc1d5b746976a9e5f1c4a580908d1f26de8e549a880391bff->enter($__internal_64ee2ce43eb8574dc1d5b746976a9e5f1c4a580908d1f26de8e549a880391bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input_datetime"));

            // line 98
            echo "    ";
            $context["__internal_7a75fe24da2a8836c0fe6402f7e1f83d25c3b8eb8ca6129a355bedeab1d83b2c"] = $this;
            // line 99
            echo "
    ";
            // line 100
            $context["class"] = (twig_replace_filter((($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array()), "")) : ("")), array("form-control" => "")) . " form-control");
            // line 101
            echo "
    ";
            // line 102
            $context["attributes"] = array("data" => array("id" => $this->getAttribute(            // line 104
(isset($context["opt"]) ? $context["opt"] : null), "id", array()), "name" => (($this->getAttribute(            // line 105
(isset($context["opt"]) ? $context["opt"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name", array()), $this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "id", array()))) : ($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "id", array()))), "value" => $this->getAttribute(            // line 106
(isset($context["opt"]) ? $context["opt"] : null), "value", array()), "type" => "hidden", "class" => "datetime", "data_notice" => (($this->getAttribute(            // line 109
(isset($context["opt"]) ? $context["opt"] : null), "notice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "notice", array()), "")) : (""))), "date" => array("type" => "text", "disabled" => (($this->getAttribute(            // line 114
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 115
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)), "class" => trim((            // line 116
(isset($context["class"]) ? $context["class"] : null) . " datepicker")), "data_errortext" => (($this->getAttribute(            // line 117
(isset($context["opt"]) ? $context["opt"] : null), "errortext", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "errortext", array()), "")) : ("")), "data_field_options" => (((($this->getAttribute(            // line 118
(isset($context["opt"]) ? $context["opt"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()), false)) : (false))) ? (twig_jsonencode_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()))) : (""))), "time" => array("type" => "text", "disabled" => (($this->getAttribute(            // line 123
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 124
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)), "class" => trim((            // line 125
(isset($context["class"]) ? $context["class"] : null) . " timepicker")), "title" => $this->env->getExtension('Bolt')->trans("general.phrase.time-format-24-12"), "style" => "margin-right: 6px;"));
            // line 130
            echo "
    <div class=\"datetime-container\">
        <div>
            <div class=\"input-group\">
                <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-tertiary\">
                        <i class=\"fa fa-calendar\"></i>
                    </button>
                </span>
                <input";
            // line 139
            echo $context["__internal_7a75fe24da2a8836c0fe6402f7e1f83d25c3b8eb8ca6129a355bedeab1d83b2c"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "date", array()));
            echo ">
            </div>
        </div>

        ";
            // line 143
            if (( !$this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "has_time", array(), "any", true, true) || ($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "has_time", array()) != false))) {
                // line 144
                echo "            <div>
                <input";
                // line 145
                echo $context["__internal_7a75fe24da2a8836c0fe6402f7e1f83d25c3b8eb8ca6129a355bedeab1d83b2c"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "time", array()));
                echo ">
            </div>
        ";
            }
            // line 148
            echo "
        <div>
            <input";
            // line 150
            echo $context["__internal_7a75fe24da2a8836c0fe6402f7e1f83d25c3b8eb8ca6129a355bedeab1d83b2c"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "data", array()));
            echo ">
            <button type=\"button\" class=\"btn btn-default btn-xs\">
                <i class=\"fa fa-close\"></i>
            </button>
        </div>
    </div>
";
            
            $__internal_64ee2ce43eb8574dc1d5b746976a9e5f1c4a580908d1f26de8e549a880391bff->leave($__internal_64ee2ce43eb8574dc1d5b746976a9e5f1c4a580908d1f26de8e549a880391bff_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 166
    public function getupload_buttons($__type__ = null, $__attr_upload__ = null, $__uploadpath__ = null, $__canUpload__ = null, $__multi__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "attr_upload" => $__attr_upload__,
            "uploadpath" => $__uploadpath__,
            "canUpload" => $__canUpload__,
            "multi" => $__multi__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0938e6a8928e130ab9469c082cb08dc9cead537317782bdde1ba7591845fbce2 = $this->env->getExtension("native_profiler");
            $__internal_0938e6a8928e130ab9469c082cb08dc9cead537317782bdde1ba7591845fbce2->enter($__internal_0938e6a8928e130ab9469c082cb08dc9cead537317782bdde1ba7591845fbce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "upload_buttons"));

            // line 167
            echo "    ";
            $context["__internal_df1afa8d2d2173f9dd253e8d3b951e5fd0c979fad5cc94ed91f1e31a2848664e"] = $this;
            // line 168
            echo "
    ";
            // line 169
            $context["items"] = $this->env->getExtension('Bolt')->stackItems(7, ((((isset($context["type"]) ? $context["type"] : null) == "image")) ? ("image") : ("other,document")));
            // line 170
            echo "
    <div class=\"button-wrap fileselectbuttongroup\">

        ";
            // line 174
            echo "        ";
            if ((isset($context["canUpload"]) ? $context["canUpload"] : null)) {
                // line 175
                echo "            <span class=\"btn btn-tertiary btn-sm fileinput-button\">
                <i class=\"fa fa-upload\"></i>
                <span>";
                // line 177
                echo ((((isset($context["type"]) ? $context["type"] : null) == "image")) ? ($this->env->getExtension('Bolt')->trans("general.phrase.upload-image")) : ($this->env->getExtension('Bolt')->trans("general.phrase.upload-file")));
                echo "</span>
                <input";
                // line 178
                echo $context["__internal_df1afa8d2d2173f9dd253e8d3b951e5fd0c979fad5cc94ed91f1e31a2848664e"]->getattr((isset($context["attr_upload"]) ? $context["attr_upload"] : null));
                echo ">
            </span>
        ";
            } else {
                // line 181
                echo "            <button type=\"button\" class=\"btn btn-sm\" disabled=\"disabled\">
                ";
                // line 182
                echo $this->env->getExtension('Bolt')->trans("general.phrase.upload-not-allowed");
                echo "
                ";
                // line 184
                echo "                ";
                $context["attr_upload"] = twig_array_merge((isset($context["attr_upload"]) ? $context["attr_upload"] : null), array("type" => "hidden"));
                // line 185
                echo "                <input";
                echo $context["__internal_df1afa8d2d2173f9dd253e8d3b951e5fd0c979fad5cc94ed91f1e31a2848664e"]->getattr((isset($context["attr_upload"]) ? $context["attr_upload"] : null));
                echo ">
            </button>
        ";
            }
            // line 188
            echo "
        ";
            // line 190
            echo "        ";
            $context["attr"] = array("class" => "btn btn-tertiary btn-sm", "data-bolt-widget" => array("buicBrowser" => array("namespace" => "files", "path" =>             // line 195
(isset($context["uploadpath"]) ? $context["uploadpath"] : null), "multiselect" =>             // line 196
(isset($context["multi"]) ? $context["multi"] : null))), "type" => "button");
            // line 201
            echo "        <button";
            echo $this->env->getExtension('Bolt')->hattr((isset($context["attr"]) ? $context["attr"] : null));
            echo "><i class=\"fa fa-download\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("field.general.select-from-server");
            echo "</button>

        ";
            // line 204
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") && (isset($context["items"]) ? $context["items"] : null))) {
                // line 205
                echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    ";
                // line 208
                echo $this->env->getExtension('Bolt')->trans("field.general.stack");
                echo "
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu select-from-stack\">
                    ";
                // line 213
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 214
                    echo "                        ";
                    $context["info"] = ($this->getAttribute($context["item"], "filesize", array()) . (((($this->getAttribute($context["item"], "imagesize", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "imagesize", array()))) : (""))) ? (((", " . $this->getAttribute($context["item"], "imagesize", array())) . " px")) : ("")));
                    // line 215
                    echo "                        <li>
                            <a href=\"#\" data-path=\"";
                    // line 216
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "filepath", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                    echo " <small>(";
                    echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : null), "html", null, true);
                    echo ")</small></a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "                </ul>
            </div>
        ";
            }
            // line 222
            echo "
    </div>
";
            
            $__internal_0938e6a8928e130ab9469c082cb08dc9cead537317782bdde1ba7591845fbce2->leave($__internal_0938e6a8928e130ab9469c082cb08dc9cead537317782bdde1ba7591845fbce2_prof);

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
        return "@bolt/_macro/_macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 222,  628 => 219,  615 => 216,  612 => 215,  609 => 214,  605 => 213,  597 => 208,  592 => 205,  589 => 204,  581 => 201,  579 => 196,  578 => 195,  576 => 190,  573 => 188,  566 => 185,  563 => 184,  559 => 182,  556 => 181,  550 => 178,  546 => 177,  542 => 175,  539 => 174,  534 => 170,  532 => 169,  529 => 168,  526 => 167,  507 => 166,  482 => 150,  478 => 148,  472 => 145,  469 => 144,  467 => 143,  460 => 139,  449 => 130,  447 => 125,  446 => 124,  445 => 123,  444 => 118,  443 => 117,  442 => 116,  441 => 115,  440 => 114,  439 => 109,  438 => 106,  437 => 105,  436 => 104,  435 => 102,  432 => 101,  430 => 100,  427 => 99,  424 => 98,  409 => 97,  386 => 80,  383 => 79,  380 => 78,  365 => 77,  340 => 71,  337 => 70,  334 => 69,  331 => 68,  312 => 67,  293 => 61,  287 => 60,  284 => 59,  276 => 57,  270 => 55,  267 => 54,  262 => 53,  260 => 52,  255 => 51,  253 => 50,  248 => 49,  246 => 48,  239 => 47,  237 => 46,  230 => 45,  227 => 44,  225 => 43,  220 => 42,  217 => 41,  212 => 40,  209 => 39,  194 => 38,  173 => 32,  170 => 31,  167 => 30,  151 => 29,  131 => 22,  129 => 21,  125 => 20,  122 => 19,  105 => 18,  86 => 12,  80 => 10,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  48 => 4,  40 => 157,  37 => 82,  34 => 73,  31 => 63,  28 => 34,  25 => 25,  22 => 14,);
    }
}
/* {##*/
/*  # Output a username and link to their profile given an ID.*/
/*  #}*/
/* {% macro userlink(user_id) %}*/
/*     {% spaceless %}*/
/*         {% set user = getuser(user_id) %}*/
/*         {% if user is not empty %}*/
/*             <a href="{{ path('useredit', {'id': user.id}) }}">{{- user.displayname -}}</a>*/
/*         {% else %}*/
/*             {{ __('panel.latest-activity.unknown') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {##*/
/*  # Contentlink by id.*/
/*  #}*/
/* {% macro contentlink_by_id(contenttype, title, content_id) %}*/
/*     {% spaceless %}*/
/*         <a href="{{ path('editcontent', {'contenttypeslug': contenttype.slug, 'id': content_id}) }}">*/
/*             {{- title|excerpt(70)|default("<em>(" ~ __('general.phrase.no-title') ~ ")</em>")|raw -}}*/
/*         </a>*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {##*/
/*  # Contentlink.*/
/*  #}*/
/* {% macro contentlink(contenttype, content) %}*/
/*     {% import _self as crosslinks %}*/
/*     {% set title = content.getTitle(true) %}*/
/*     {{ crosslinks.contentlink_by_id(contenttype, title, content.id) }}*/
/* {% endmacro %}*/
/* */
/* {##*/
/*  # Outputs tag attributes.*/
/*  #}*/
/* {% macro attr(attributes) %}*/
/*     {% spaceless %}*/
/*         {% for attrname, value in attributes %}*/
/*             {% if attrname == 'value' %}*/
/*                 value="{{ value }}"*/
/*             {% elseif value is not empty %}*/
/*                 {% if attrname in ['required', 'disabled', 'selected', 'autofocus', 'multiple', 'readonly'] %}*/
/*                     {{ attrname }}="{{ attrname }}"*/
/*                 {% elseif attrname == 'name_id' %}*/
/*                     name="{{ value }}" id="{{ value }}"*/
/*                 {% elseif attrname == 'class' %}*/
/*                     class="{{ value|trim }}"*/
/*                 {% elseif attrname == 'style' %}*/
/*                     style="{{ value|trim }}"*/
/*                 {% elseif attrname == 'checked' %}*/
/*                     {% if value != false %}checked="checked"{% endif %}*/
/*                 {% elseif attrname == '_bind' %}*/
/*                     data-bind="{{ {bind: value[0]}|merge(value[1]|default({}))|json_encode }}"*/
/*                 {% else %}*/
/*                     {{ attrname|replace({'_': '-'}) }}="{{ value }}"*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {##*/
/*  # Actionform.*/
/*  #}*/
/* {% macro actionform(content, action, icon, text, confirmation_text) %}*/
/*     {% if action == 'held' %}*/
/*         {% set action = 'depublish' %}*/
/*     {% endif %}*/
/*     <a href="#" data-listing-cmd="record:{{ action }}"><i class="fa {{ icon }}"></i> {{ __(text) }}</a>*/
/* {% endmacro %}*/
/* */
/* {##*/
/*  # Typepopover.*/
/*  #}*/
/* {% macro typepopover(types) %}*/
/*     {% set types = types|default(app.config.get('general/accept_file_types')) %}*/
/*     {% set text = __("field.general.allowed-filetypes") ~ "<code>" ~ types|join("</code>, <code>") ~ "</code>." %}*/
/*     <span class="label info-pop" data-title="" data-html="true" data-content="{{ text }}">{{ __('general.phrase.types') }}</span>*/
/* {% endmacro %}*/
/* */
/* {##*/
/*  # Renders a datetime/date input component*/
/*  #*/
/*  # Required options:*/
/*  #    id:                 id of that group*/
/*  # Optional options:*/
/*  #    disabled  [false]:  disabled input*/
/*  #    required  [false]:  make input required*/
/*  #    class     []:       class added to date/time input*/
/*  #    errortext []:       error text*/
/*  #    options   []:       options passed to datepicker*/
/*  #*/
/*  # @param array opt Options defining the component*/
/*  #}*/
/* {% macro input_datetime(opt) %}*/
/*     {% from _self import attr %}*/
/* */
/*     {% set class = opt.class|default('')|replace({'form-control': ''}) ~ ' form-control' %}*/
/* */
/*     {% set attributes = {*/
/*         data: {*/
/*             id:          opt.id,*/
/*             name:        opt.name|default(opt.id),*/
/*             value:       opt.value,*/
/*             type:        'hidden',*/
/*             class:       'datetime',*/
/*             data_notice: opt.notice|default('')*/
/*         },*/
/* */
/*         date: {*/
/*             type:                'text',*/
/*             disabled:            opt.disabled|default(false),*/
/*             required:            opt.required|default(false),*/
/*             class:               (class ~ ' datepicker')|trim,*/
/*             data_errortext:      opt.errortext|default(''),*/
/*             data_field_options:  opt.options|default(false) ? opt.options|json_encode : ''*/
/*         },*/
/* */
/*         time: {*/
/*             type:      'text',*/
/*             disabled:  opt.disabled|default(false),*/
/*             required:  opt.required|default(false),*/
/*             class:     (class ~ ' timepicker')|trim,*/
/*             title:     __('general.phrase.time-format-24-12'),*/
/*             style:     'margin-right: 6px;'*/
/*         }*/
/*     } %}*/
/* */
/*     <div class="datetime-container">*/
/*         <div>*/
/*             <div class="input-group">*/
/*                 <span class="input-group-btn">*/
/*                     <button type="button" class="btn btn-tertiary">*/
/*                         <i class="fa fa-calendar"></i>*/
/*                     </button>*/
/*                 </span>*/
/*                 <input{{ attr(attributes.date) }}>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if opt.has_time is not defined or opt.has_time != false %}*/
/*             <div>*/
/*                 <input{{ attr(attributes.time) }}>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             <input{{ attr(attributes.data) }}>*/
/*             <button type="button" class="btn btn-default btn-xs">*/
/*                 <i class="fa fa-close"></i>*/
/*             </button>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {##*/
/*  # Renders a upload button combo [Upload] [Select from Server] [Select from Stack]*/
/*  #*/
/*  # @param string type Either 'image' or 'other,document'*/
/*  # @param string attr_upload Attributes for the file upload button*/
/*  # @param string uploadpath Relative upload path*/
/*  # @param bool   multi If true allows uploading multiple files*/
/*  #}*/
/* {% macro upload_buttons(type, attr_upload, uploadpath, canUpload, multi) %}*/
/*     {% from _self import attr %}*/
/* */
/*     {% set items = stackitems(7, (type == 'image') ?  'image' : 'other,document') %}*/
/* */
/*     <div class="button-wrap fileselectbuttongroup">*/
/* */
/*         {# Button: Upload #}*/
/*         {% if canUpload %}*/
/*             <span class="btn btn-tertiary btn-sm fileinput-button">*/
/*                 <i class="fa fa-upload"></i>*/
/*                 <span>{{ (type == 'image') ? __('general.phrase.upload-image') : __('general.phrase.upload-file') }}</span>*/
/*                 <input{{ attr(attr_upload) }}>*/
/*             </span>*/
/*         {% else %}*/
/*             <button type="button" class="btn btn-sm" disabled="disabled">*/
/*                 {{ __('general.phrase.upload-not-allowed') }}*/
/*                 {# creating a dummy stub, instead of the uploader. Needed (currently) to attach events to #}*/
/*                 {% set attr_upload = attr_upload|merge({'type' : 'hidden'}) %}*/
/*                 <input{{ attr(attr_upload) }}>*/
/*             </button>*/
/*         {% endif %}*/
/* */
/*         {# Button: Select from Server #}*/
/*         {% set attr = {*/
/*             'class': 'btn btn-tertiary btn-sm',*/
/*             'data-bolt-widget': {*/
/*                 buicBrowser: {*/
/*                     namespace: 'files',*/
/*                     path: uploadpath,*/
/*                     multiselect: multi*/
/*                 },*/
/*             },*/
/*             'type': 'button',*/
/*         } %}*/
/*         <button{{ hattr(attr) }}><i class="fa fa-download"></i> {{ __('field.general.select-from-server') }}</button>*/
/* */
/*         {# Button: Select from Stack #}*/
/*         {% if not app.config.get('general/backend/stack/disable', false) and items %}*/
/*             <div class="btn-group">*/
/*                 <button type="button" class="btn btn-tertiary btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="fa fa-paperclip"></i>*/
/*                     {{ __('field.general.stack') }}*/
/*                     <span class="caret"></span>*/
/*                 </button>*/
/* */
/*                 <ul class="dropdown-menu select-from-stack">*/
/*                     {% for item in items %}*/
/*                         {% set info = item.filesize ~ (item.imagesize|default() ? ', ' ~ item.imagesize ~ ' px' : '') %}*/
/*                         <li>*/
/*                             <a href="#" data-path="{{ item.filepath }}">{{ item.basename }} <small>({{ info }})</small></a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* {% endmacro %}*/
/* */
