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
        $__internal_45cbd9685379d94f5a75c47d4d20c0a8f030c8ad2fb1e3dca3a593e80ad54ea3 = $this->env->getExtension("native_profiler");
        $__internal_45cbd9685379d94f5a75c47d4d20c0a8f030c8ad2fb1e3dca3a593e80ad54ea3->enter($__internal_45cbd9685379d94f5a75c47d4d20c0a8f030c8ad2fb1e3dca3a593e80ad54ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45cbd9685379d94f5a75c47d4d20c0a8f030c8ad2fb1e3dca3a593e80ad54ea3->leave($__internal_45cbd9685379d94f5a75c47d4d20c0a8f030c8ad2fb1e3dca3a593e80ad54ea3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_403cdb532081ab76c587679eb3d53623c5ca15256a676cb937425060eecc24e3 = $this->env->getExtension("native_profiler");
        $__internal_403cdb532081ab76c587679eb3d53623c5ca15256a676cb937425060eecc24e3->enter($__internal_403cdb532081ab76c587679eb3d53623c5ca15256a676cb937425060eecc24e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_403cdb532081ab76c587679eb3d53623c5ca15256a676cb937425060eecc24e3->leave($__internal_403cdb532081ab76c587679eb3d53623c5ca15256a676cb937425060eecc24e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6333f08093144568739cb0f71a4e05c36a5e3cd5d0522bd3e3d9acf3ee86bfdd = $this->env->getExtension("native_profiler");
        $__internal_6333f08093144568739cb0f71a4e05c36a5e3cd5d0522bd3e3d9acf3ee86bfdd->enter($__internal_6333f08093144568739cb0f71a4e05c36a5e3cd5d0522bd3e3d9acf3ee86bfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6333f08093144568739cb0f71a4e05c36a5e3cd5d0522bd3e3d9acf3ee86bfdd->leave($__internal_6333f08093144568739cb0f71a4e05c36a5e3cd5d0522bd3e3d9acf3ee86bfdd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cdee66c72094b680066c8605b577861f301e990bf4a0005dd85a1927d3c22aa = $this->env->getExtension("native_profiler");
        $__internal_9cdee66c72094b680066c8605b577861f301e990bf4a0005dd85a1927d3c22aa->enter($__internal_9cdee66c72094b680066c8605b577861f301e990bf4a0005dd85a1927d3c22aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : null))));
        echo "
";
        
        $__internal_9cdee66c72094b680066c8605b577861f301e990bf4a0005dd85a1927d3c22aa->leave($__internal_9cdee66c72094b680066c8605b577861f301e990bf4a0005dd85a1927d3c22aa_prof);

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
