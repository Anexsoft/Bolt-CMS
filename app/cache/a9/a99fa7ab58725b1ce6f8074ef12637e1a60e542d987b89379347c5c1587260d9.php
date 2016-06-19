<?php

/* @bolt/_sub/_csrf_token.twig */
class __TwigTemplate_f60811573e39f5b9fb0e879b274c09e9fbfd99ac811e7f81988aa6200587f406 extends Twig_Template
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
        $__internal_912a8c2ef9abceeed3a810851f4bb22374040896677157fd9e0a65892f5a9edb = $this->env->getExtension("native_profiler");
        $__internal_912a8c2ef9abceeed3a810851f4bb22374040896677157fd9e0a65892f5a9edb->enter($__internal_912a8c2ef9abceeed3a810851f4bb22374040896677157fd9e0a65892f5a9edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_csrf_token.twig"));

        // line 1
        echo "<input type=\"hidden\" name=\"bolt_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->token(), "html", null, true);
        echo "\">
";
        
        $__internal_912a8c2ef9abceeed3a810851f4bb22374040896677157fd9e0a65892f5a9edb->leave($__internal_912a8c2ef9abceeed3a810851f4bb22374040896677157fd9e0a65892f5a9edb_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_csrf_token.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="hidden" name="bolt_csrf_token" value="{{ token() }}">*/
/* */
