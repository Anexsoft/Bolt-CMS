<?php

/* @bolt/_macro/_panels.twig */
class __TwigTemplate_20b622e56283b3a791ac6abe03f38267122b733e6e55915acfb1c6d4d7b0c2e7 extends Twig_Template
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
        $__internal_64663104f98575f1e011d87fcfbdd42d09223ced9bb68f1092bc208d80b62e7f = $this->env->getExtension("native_profiler");
        $__internal_64663104f98575f1e011d87fcfbdd42d09223ced9bb68f1092bc208d80b62e7f->enter($__internal_64663104f98575f1e011d87fcfbdd42d09223ced9bb68f1092bc208d80b62e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_panels.twig"));

        // line 14
        echo "

";
        // line 29
        echo "

";
        
        $__internal_64663104f98575f1e011d87fcfbdd42d09223ced9bb68f1092bc208d80b62e7f->leave($__internal_64663104f98575f1e011d87fcfbdd42d09223ced9bb68f1092bc208d80b62e7f_prof);

    }

    // line 7
    public function getstack($__items__ = null, $__ommit_empty__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "ommit_empty" => $__ommit_empty__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cc71e75920bba09383fe6631199ba0bc7111eaeb860395c765a999e7bf748127 = $this->env->getExtension("native_profiler");
            $__internal_cc71e75920bba09383fe6631199ba0bc7111eaeb860395c765a999e7bf748127->enter($__internal_cc71e75920bba09383fe6631199ba0bc7111eaeb860395c765a999e7bf748127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "stack"));

            // line 8
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method")) {
                // line 9
                echo "        ";
                if (( !((array_key_exists("ommit_empty", $context)) ? (_twig_default_filter((isset($context["ommit_empty"]) ? $context["ommit_empty"] : null), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt')->stackItems()))) {
                    // line 10
                    echo "            ";
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("stack/show", array("items" => ((array_key_exists("item", $context)) ? (_twig_default_filter((isset($context["item"]) ? $context["item"] : null), 10)) : (10)))));
                    echo "
        ";
                }
                // line 12
                echo "    ";
            }
            
            $__internal_cc71e75920bba09383fe6631199ba0bc7111eaeb860395c765a999e7bf748127->leave($__internal_cc71e75920bba09383fe6631199ba0bc7111eaeb860395c765a999e7bf748127_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getlastmodified($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_be7f6fd25e81942ec9bb5192dea56e320ffce1c987106a1b54da1cc236e21dcd = $this->env->getExtension("native_profiler");
            $__internal_be7f6fd25e81942ec9bb5192dea56e320ffce1c987106a1b54da1cc236e21dcd->enter($__internal_be7f6fd25e81942ec9bb5192dea56e320ffce1c987106a1b54da1cc236e21dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "lastmodified"));

            // line 23
            echo "    ";
            if ((((array_key_exists("content_id", $context)) ? (_twig_default_filter((isset($context["content_id"]) ? $context["content_id"] : null), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt')->stackItems()))) {
                // line 24
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : null))));
                echo "
    ";
            } else {
                // line 26
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : null), "contentid" => (isset($context["content_id"]) ? $context["content_id"] : null))));
                echo "
    ";
            }
            
            $__internal_be7f6fd25e81942ec9bb5192dea56e320ffce1c987106a1b54da1cc236e21dcd->leave($__internal_be7f6fd25e81942ec9bb5192dea56e320ffce1c987106a1b54da1cc236e21dcd_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getchanges($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_594d9b079c86814f6f708b41e38b00474af00392d002233d0bca71ef39c4a436 = $this->env->getExtension("native_profiler");
            $__internal_594d9b079c86814f6f708b41e38b00474af00392d002233d0bca71ef39c4a436->enter($__internal_594d9b079c86814f6f708b41e38b00474af00392d002233d0bca71ef39c4a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "changes"));

            // line 38
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/changelog/enabled", 1 => true), "method")) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("changelogrecord", array("contenttype" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : null), "contentid" => (isset($context["content_id"]) ? $context["content_id"] : null))));
                echo "
    ";
            }
            
            $__internal_594d9b079c86814f6f708b41e38b00474af00392d002233d0bca71ef39c4a436->leave($__internal_594d9b079c86814f6f708b41e38b00474af00392d002233d0bca71ef39c4a436_prof);

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
        return "@bolt/_macro/_panels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 39,  145 => 38,  129 => 37,  107 => 26,  101 => 24,  98 => 23,  82 => 22,  63 => 12,  57 => 10,  54 => 9,  51 => 8,  35 => 7,  26 => 29,  22 => 14,);
    }
}
/* {##*/
/*  # Renders a stack panel*/
/*  #*/
/*  # @param int  items (default: 10)*/
/*  # @param bool ommit_empty (default: false)*/
/*  #}*/
/* {% macro stack(items, ommit_empty) %}*/
/*     {% if not app.config.get('general/backend/stack/disable', false) %}*/
/*         {% if not ommit_empty|default(false) or stackitems() is not empty %}*/
/*             {{ render(path('stack/show', {'items': item|default(10)} )) }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Renders a last modified panel*/
/*  #*/
/*  # @param string contenttype_slug*/
/*  # @param mixed  content_id (default: false)*/
/*  #}*/
/* {% macro lastmodified(contenttype_slug, content_id) %}*/
/*     {% if content_id|default(false) or stackitems() is not empty %}*/
/*         {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug})) }}*/
/*     {% else %}*/
/*         {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug, 'contentid': content_id})) }}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Renders a record changes panel*/
/*  #*/
/*  # @param string contenttype_slug*/
/*  # @param mixed  content_id (default: false)*/
/*  #}*/
/* {% macro changes(contenttype_slug, content_id) %}*/
/*     {% if app.config.get('general/changelog/enabled', true) %}*/
/*         {{ render(path('changelogrecord', {'contenttype': contenttype_slug, 'contentid': content_id})) }}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
