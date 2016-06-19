<?php

/* @bolt/_macro/_pager.twig */
class __TwigTemplate_85f8f679a9b2597a80e0434366c97b8ee2f88723497598f96beee250e43c63d8 extends Twig_Template
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
        $__internal_e3f1e97a08922dc3e49d993ed8268ce011f1ec3effc129292d2110c6ab4a038a = $this->env->getExtension("native_profiler");
        $__internal_e3f1e97a08922dc3e49d993ed8268ce011f1ec3effc129292d2110c6ab4a038a->enter($__internal_e3f1e97a08922dc3e49d993ed8268ce011f1ec3effc129292d2110c6ab4a038a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_pager.twig"));

        
        $__internal_e3f1e97a08922dc3e49d993ed8268ce011f1ec3effc129292d2110c6ab4a038a->leave($__internal_e3f1e97a08922dc3e49d993ed8268ce011f1ec3effc129292d2110c6ab4a038a_prof);

    }

    // line 7
    public function getpager($__pager__ = null, $__pagerName__ = null, $__surr__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "pagerName" => $__pagerName__,
            "surr" => $__surr__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3deb76475b85e42cea44d0b257b3407bd36d90fcb0cb475f056f0bc20041475a = $this->env->getExtension("native_profiler");
            $__internal_3deb76475b85e42cea44d0b257b3407bd36d90fcb0cb475f056f0bc20041475a->enter($__internal_3deb76475b85e42cea44d0b257b3407bd36d90fcb0cb475f056f0bc20041475a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "pager"));

            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env, ((array_key_exists("pagerName", $context)) ? (_twig_default_filter((isset($context["pagerName"]) ? $context["pagerName"] : null), "")) : ("")), ((array_key_exists("surr", $context)) ? (_twig_default_filter((isset($context["surr"]) ? $context["surr"] : null), 4)) : (4)), "backend"), "html", null, true);
            echo "
";
            
            $__internal_3deb76475b85e42cea44d0b257b3407bd36d90fcb0cb475f056f0bc20041475a->leave($__internal_3deb76475b85e42cea44d0b257b3407bd36d90fcb0cb475f056f0bc20041475a_prof);

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
        return "@bolt/_macro/_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  27 => 7,);
    }
}
/* {##*/
/*  # Renders a backend pager*/
/*  #*/
/*  # @param string  pagerName (default: '')*/
/*  # @param int     surr (default: 4)*/
/*  #}*/
/* {% macro pager(pager, pagerName, surr) %}*/
/*     {{ pager(pagerName|default(''), surr|default(4), 'backend') }}*/
/* {% endmacro %}*/
/* */
