<?php

/* @bolt/_buic/_info.twig */
class __TwigTemplate_ba4a6e870154de89302eb9bc64b5041de7318378022535ead7afc9b87f542231 extends Twig_Template
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
        $__internal_c1c27ebb2a28f720161766ee02fe2f541da0fdb7f14c2d882286a3cc80b8614d = $this->env->getExtension("native_profiler");
        $__internal_c1c27ebb2a28f720161766ee02fe2f541da0fdb7f14c2d882286a3cc80b8614d->enter($__internal_c1c27ebb2a28f720161766ee02fe2f541da0fdb7f14c2d882286a3cc80b8614d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_info.twig"));

        
        $__internal_c1c27ebb2a28f720161766ee02fe2f541da0fdb7f14c2d882286a3cc80b8614d->leave($__internal_c1c27ebb2a28f720161766ee02fe2f541da0fdb7f14c2d882286a3cc80b8614d_prof);

    }

    // line 7
    public function getbuic_info($__label__ = null, $__id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "id" => $__id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c4acc34fa074d272d05f662d3349728b0320b86f6bed1f18a50a5de5f6646839 = $this->env->getExtension("native_profiler");
            $__internal_c4acc34fa074d272d05f662d3349728b0320b86f6bed1f18a50a5de5f6646839->enter($__internal_c4acc34fa074d272d05f662d3349728b0320b86f6bed1f18a50a5de5f6646839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_info"));

            // line 8
            echo "    ";
            $context["attributes"] = array("class" => "info-pop fa fa-info-circle", "data-content" => $this->getAttribute($this->getAttribute(            // line 10
(isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => (isset($context["id"]) ? $context["id"] : null), 1 => array(), 2 => "infos"), "method"), "data-html" => true, "data-title" => $this->env->getExtension('translator')->trans(            // line 12
(isset($context["label"]) ? $context["label"] : null)));
            // line 14
            echo "    <i";
            echo $this->env->getExtension('Bolt')->hattr((isset($context["attributes"]) ? $context["attributes"] : null));
            echo "><span class=\"sr-only\">";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.info");
            echo "</span></i>
";
            
            $__internal_c4acc34fa074d272d05f662d3349728b0320b86f6bed1f18a50a5de5f6646839->leave($__internal_c4acc34fa074d272d05f662d3349728b0320b86f6bed1f18a50a5de5f6646839_prof);

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
        return "@bolt/_buic/_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  46 => 12,  45 => 10,  43 => 8,  27 => 7,);
    }
}
/* {##*/
/*  # Renders a info popup.*/
/*  #*/
/*  # @param string title*/
/*  # @param string id*/
/*  #}*/
/* {% macro buic_info(label, id) %}*/
/*     {% set attributes = {*/
/*         'class':         'info-pop fa fa-info-circle',*/
/*         'data-content':  app.translator.trans(id, {}, 'infos'),*/
/*         'data-html':     true,*/
/*         'data-title':    label|trans,*/
/*     } %}*/
/*     <i{{ hattr(attributes) }}><span class="sr-only">{{ __('general.phrase.info') }}</span></i>*/
/* {% endmacro %}*/
/* */
