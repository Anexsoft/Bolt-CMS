<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5eb8e337ffa5fed340d794c773592fa00bfff607c16e66ca196bb658b220916a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_126f0e090b4775d957e9455e6396a72e2014d9de81d93679ee690c3d0bf2b32b = $this->env->getExtension("native_profiler");
        $__internal_126f0e090b4775d957e9455e6396a72e2014d9de81d93679ee690c3d0bf2b32b->enter($__internal_126f0e090b4775d957e9455e6396a72e2014d9de81d93679ee690c3d0bf2b32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_126f0e090b4775d957e9455e6396a72e2014d9de81d93679ee690c3d0bf2b32b->leave($__internal_126f0e090b4775d957e9455e6396a72e2014d9de81d93679ee690c3d0bf2b32b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61d49c6a80b45db1afb97d6999685460f758401e925564bed84e1aa2720883f7 = $this->env->getExtension("native_profiler");
        $__internal_61d49c6a80b45db1afb97d6999685460f758401e925564bed84e1aa2720883f7->enter($__internal_61d49c6a80b45db1afb97d6999685460f758401e925564bed84e1aa2720883f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_61d49c6a80b45db1afb97d6999685460f758401e925564bed84e1aa2720883f7->leave($__internal_61d49c6a80b45db1afb97d6999685460f758401e925564bed84e1aa2720883f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a969cc7d4158e75af1851c4f89c264beb655683f354caffdcd99b94b1b3ca17 = $this->env->getExtension("native_profiler");
        $__internal_2a969cc7d4158e75af1851c4f89c264beb655683f354caffdcd99b94b1b3ca17->enter($__internal_2a969cc7d4158e75af1851c4f89c264beb655683f354caffdcd99b94b1b3ca17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a969cc7d4158e75af1851c4f89c264beb655683f354caffdcd99b94b1b3ca17->leave($__internal_2a969cc7d4158e75af1851c4f89c264beb655683f354caffdcd99b94b1b3ca17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8c702632137418df4ddfc625aaf58948bc63dae6045db958040e13fe80ed2fe = $this->env->getExtension("native_profiler");
        $__internal_a8c702632137418df4ddfc625aaf58948bc63dae6045db958040e13fe80ed2fe->enter($__internal_a8c702632137418df4ddfc625aaf58948bc63dae6045db958040e13fe80ed2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : null))));
        echo "
";
        
        $__internal_a8c702632137418df4ddfc625aaf58948bc63dae6045db958040e13fe80ed2fe->leave($__internal_a8c702632137418df4ddfc625aaf58948bc63dae6045db958040e13fe80ed2fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
