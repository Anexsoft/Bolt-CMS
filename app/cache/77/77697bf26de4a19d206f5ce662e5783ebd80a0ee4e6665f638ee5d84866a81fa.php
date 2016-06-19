<?php

/* @bolt/_base/_panel.twig */
class __TwigTemplate_db14f517db88d1708c3465325f164226ceddd0305beb61c4cf247ef6fbb33c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ca6b178bcab07ff1ec12297cd0609b7f627965006a51b14a6443ac0c996e453 = $this->env->getExtension("native_profiler");
        $__internal_8ca6b178bcab07ff1ec12297cd0609b7f627965006a51b14a6443ac0c996e453->enter($__internal_8ca6b178bcab07ff1ec12297cd0609b7f627965006a51b14a6443ac0c996e453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_panel.twig"));

        // line 9
        echo "<div class=\"panel panel-default ";
        $this->displayBlock('panel_class', $context, $blocks);
        echo "\">
    <div ";
        // line 10
        $this->displayBlock('panel_alert', $context, $blocks);
        echo ">
        <i class=\"fa fa-fw ";
        // line 11
        $this->displayBlock('panel_icon', $context, $blocks);
        echo "\"></i>
        ";
        // line 12
        $this->displayBlock('panel_head', $context, $blocks);
        // line 13
        echo "    </div>

    <div class=\"panel-body\">
        ";
        // line 16
        $this->displayBlock('panel_body', $context, $blocks);
        // line 17
        echo "    </div>
</div>
";
        
        $__internal_8ca6b178bcab07ff1ec12297cd0609b7f627965006a51b14a6443ac0c996e453->leave($__internal_8ca6b178bcab07ff1ec12297cd0609b7f627965006a51b14a6443ac0c996e453_prof);

    }

    // line 9
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_a05ad6781bcbd3956de047c9bcda799f4dac68065e4637ff1f8e6b348c9d75ad = $this->env->getExtension("native_profiler");
        $__internal_a05ad6781bcbd3956de047c9bcda799f4dac68065e4637ff1f8e6b348c9d75ad->enter($__internal_a05ad6781bcbd3956de047c9bcda799f4dac68065e4637ff1f8e6b348c9d75ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        
        $__internal_a05ad6781bcbd3956de047c9bcda799f4dac68065e4637ff1f8e6b348c9d75ad->leave($__internal_a05ad6781bcbd3956de047c9bcda799f4dac68065e4637ff1f8e6b348c9d75ad_prof);

    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        $__internal_d07878b7f3daa69a16059a8a6d98b431d7ae1befe185efa92eb28a04375e9e3c = $this->env->getExtension("native_profiler");
        $__internal_d07878b7f3daa69a16059a8a6d98b431d7ae1befe185efa92eb28a04375e9e3c->enter($__internal_d07878b7f3daa69a16059a8a6d98b431d7ae1befe185efa92eb28a04375e9e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_alert"));

        echo "class=\"panel-heading\"";
        
        $__internal_d07878b7f3daa69a16059a8a6d98b431d7ae1befe185efa92eb28a04375e9e3c->leave($__internal_d07878b7f3daa69a16059a8a6d98b431d7ae1befe185efa92eb28a04375e9e3c_prof);

    }

    // line 11
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_8cb8f4910762b466d470d45ec124b3527dbd0c36c8a1e1a1c65f34630de33606 = $this->env->getExtension("native_profiler");
        $__internal_8cb8f4910762b466d470d45ec124b3527dbd0c36c8a1e1a1c65f34630de33606->enter($__internal_8cb8f4910762b466d470d45ec124b3527dbd0c36c8a1e1a1c65f34630de33606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-circle-o";
        
        $__internal_8cb8f4910762b466d470d45ec124b3527dbd0c36c8a1e1a1c65f34630de33606->leave($__internal_8cb8f4910762b466d470d45ec124b3527dbd0c36c8a1e1a1c65f34630de33606_prof);

    }

    // line 12
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_b04c41a150a0715361456179727cc6c1adecafb68ced1aab6e48a2b6952b0d77 = $this->env->getExtension("native_profiler");
        $__internal_b04c41a150a0715361456179727cc6c1adecafb68ced1aab6e48a2b6952b0d77->enter($__internal_b04c41a150a0715361456179727cc6c1adecafb68ced1aab6e48a2b6952b0d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo "[PANEL_HEAD]";
        
        $__internal_b04c41a150a0715361456179727cc6c1adecafb68ced1aab6e48a2b6952b0d77->leave($__internal_b04c41a150a0715361456179727cc6c1adecafb68ced1aab6e48a2b6952b0d77_prof);

    }

    // line 16
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_c2e9094b2ed0999c2b319d30f73f6f05f6f9d82eef1babd8d4ac5c946517c0de = $this->env->getExtension("native_profiler");
        $__internal_c2e9094b2ed0999c2b319d30f73f6f05f6f9d82eef1babd8d4ac5c946517c0de->enter($__internal_c2e9094b2ed0999c2b319d30f73f6f05f6f9d82eef1babd8d4ac5c946517c0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        echo "[PANEL_BODY]";
        
        $__internal_c2e9094b2ed0999c2b319d30f73f6f05f6f9d82eef1babd8d4ac5c946517c0de->leave($__internal_c2e9094b2ed0999c2b319d30f73f6f05f6f9d82eef1babd8d4ac5c946517c0de_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_panel.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  93 => 12,  81 => 11,  69 => 10,  58 => 9,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  36 => 11,  32 => 10,  27 => 9,);
    }
}
/* {##*/
/*  # Template for sidebar panels*/
/*  #*/
/*  # Blocks: panel_class:  A classname used for styling*/
/*  #         panel_icon:   A fontawsome CSS class name (Optional)*/
/*  #         panel_head:   The headline*/
/*  #         panel_body:   The Body*/
/*  #}*/
/* <div class="panel panel-default {% block panel_class %}{% endblock panel_class %}">*/
/*     <div {% block panel_alert %}class="panel-heading"{% endblock panel_alert %}>*/
/*         <i class="fa fa-fw {% block panel_icon %}fa-circle-o{% endblock panel_icon %}"></i>*/
/*         {% block panel_head %}[PANEL_HEAD]{% endblock panel_head %}*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         {% block panel_body %}[PANEL_BODY]{% endblock panel_body %}*/
/*     </div>*/
/* </div>*/
/* */
