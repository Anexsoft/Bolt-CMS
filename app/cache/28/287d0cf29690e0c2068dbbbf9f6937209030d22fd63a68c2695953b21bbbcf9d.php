<?php

/* @BoltProfiler/config.html.twig */
class __TwigTemplate_596afaf95100774a06d9a1be62cbc3f7849ee1c8a799df45a3f2632723e02064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@BoltProfiler/config.html.twig", 1);
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
        $__internal_c19da2ad660fd028e0153a27d594208b2880c8b59000fc0b01402333b057a506 = $this->env->getExtension("native_profiler");
        $__internal_c19da2ad660fd028e0153a27d594208b2880c8b59000fc0b01402333b057a506->enter($__internal_c19da2ad660fd028e0153a27d594208b2880c8b59000fc0b01402333b057a506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BoltProfiler/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c19da2ad660fd028e0153a27d594208b2880c8b59000fc0b01402333b057a506->leave($__internal_c19da2ad660fd028e0153a27d594208b2880c8b59000fc0b01402333b057a506_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e09a29a18269651dba84d71ca5a7d0308a41f06393016064083ec35573d4b15 = $this->env->getExtension("native_profiler");
        $__internal_6e09a29a18269651dba84d71ca5a7d0308a41f06393016064083ec35573d4b15->enter($__internal_6e09a29a18269651dba84d71ca5a7d0308a41f06393016064083ec35573d4b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "<style>
.sf-toolbar-block-config img {
    height: auto;
    top: 6px !important;
}
.sf-toolbar-block-config a {
    text-decoration: none;
}
.sf-toolbar-block-config .sf-toolbar-info {
    min-width: 220px;
}
</style>
    ";
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <span class=\"sf-toolbar-label\">
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">
            <img width=\"26\" height=\"28\" alt=\"PHP\" src=\"data:image/png;base64,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\">
        </a>
        </span>

    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "

    ";
        // line 27
        ob_start();
        // line 28
        echo "        ";
        ob_start();
        // line 29
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "phpversion", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 35
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 36
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 43
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@BoltProfiler/config.html.twig", 44)->display(array_merge($context, array("link" => false)));
        // line 45
        echo "
";
        
        $__internal_6e09a29a18269651dba84d71ca5a7d0308a41f06393016064083ec35573d4b15->leave($__internal_6e09a29a18269651dba84d71ca5a7d0308a41f06393016064083ec35573d4b15_prof);

    }

    // line 48
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0f7d3fabf629ca5579e02f522bb15f843bc6fedfed30f9dfb471f1c29f3a66e = $this->env->getExtension("native_profiler");
        $__internal_c0f7d3fabf629ca5579e02f522bb15f843bc6fedfed30f9dfb471f1c29f3a66e->enter($__internal_c0f7d3fabf629ca5579e02f522bb15f843bc6fedfed30f9dfb471f1c29f3a66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 49
        echo "<span class=\"label\">
    <span class=\"icon\"><svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M11,5.1C11,3.4,9.6,2,7.9,2H5.1C3.4,2,2,3.4,2,5.1v12.9C2,19.6,3.4,21,5.1,21h2.9c1.7,0,3.1-1.4,3.1-3.1V5.1z M5.2,4h2.7C8.4,4,9,4.8,9,5.3V11H4V5.3C4,4.8,4.6,4,5.2,4z M22,5.1C22,3.4,20.6,2,18.9,2h-2.9C14.4,2,13,3.4,13,5.1v12.9c0,1.7,1.4,3.1,3.1,3.1h2.9c1.7,0,3.1-1.4,3.1-3.1V5.1z M16,4h2.8C19.4,4,20,4.8,20,5.3V8h-5V5.3C15,4.8,15.5,4,16,4z\"/>
</svg>
</span>
    <strong>Config</strong>
</span>
";
        
        $__internal_c0f7d3fabf629ca5579e02f522bb15f843bc6fedfed30f9dfb471f1c29f3a66e->leave($__internal_c0f7d3fabf629ca5579e02f522bb15f843bc6fedfed30f9dfb471f1c29f3a66e_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ae3a93d532209f605ea5f57aa8508bc8441755f241d57d17b2dbdd7179a2910 = $this->env->getExtension("native_profiler");
        $__internal_5ae3a93d532209f605ea5f57aa8508bc8441755f241d57d17b2dbdd7179a2910->enter($__internal_5ae3a93d532209f605ea5f57aa8508bc8441755f241d57d17b2dbdd7179a2910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            ";
        // line 66
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationname", array())) {
            // line 67
            echo "                <th>Application</th>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "applicationversion", array()), "html", null, true);
            echo " (on Symfony ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array()), "html", null, true);
            echo ")</td>
            ";
        } else {
            // line 70
            echo "                <th>Symfony version</th>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "symfonyversion", array()), "html", null, true);
            echo "</td>
            ";
        }
        // line 73
        echo "        </tr>
        ";
        // line 74
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "appname", array()))) {
            // line 75
            echo "            <tr>
                <th>Application name</th>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "appname", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 80
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "env", array()))) {
            // line 81
            echo "            <tr>
                <th>Environment</th>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "env", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 86
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "debug", array()))) {
            // line 87
            echo "            <tr>
                <th>Debug</th>
                <td>";
            // line 89
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</td>
            </tr>
        ";
        }
        // line 92
        echo "    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "phpversion", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 106
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasxdebug", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 110
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasaccelerator", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 114
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasxcache", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 118
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasapc", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>";
        // line 122
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "haszendopcache", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 126
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "haseaccelerator", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 134
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "bundles", array())) {
            // line 135
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 141
            $context["bundles"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "bundles", array());
            // line 142
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["bundles"]) ? $context["bundles"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 143
                echo "            <tr>
                <th>";
                // line 144
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                <td>";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bundles"]) ? $context["bundles"] : null), $context["name"], array(), "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "        </table>
    ";
        }
        
        $__internal_5ae3a93d532209f605ea5f57aa8508bc8441755f241d57d17b2dbdd7179a2910->leave($__internal_5ae3a93d532209f605ea5f57aa8508bc8441755f241d57d17b2dbdd7179a2910_prof);

    }

    public function getTemplateName()
    {
        return "@BoltProfiler/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 148,  312 => 145,  308 => 144,  305 => 143,  300 => 142,  298 => 141,  290 => 135,  288 => 134,  281 => 130,  274 => 126,  267 => 122,  260 => 118,  253 => 114,  246 => 110,  239 => 106,  232 => 102,  220 => 92,  214 => 89,  210 => 87,  207 => 86,  201 => 83,  197 => 81,  194 => 80,  188 => 77,  184 => 75,  182 => 74,  179 => 73,  174 => 71,  171 => 70,  162 => 68,  159 => 67,  157 => 66,  148 => 59,  142 => 58,  128 => 49,  122 => 48,  114 => 45,  111 => 44,  108 => 43,  102 => 40,  95 => 36,  91 => 35,  84 => 31,  80 => 29,  77 => 28,  75 => 27,  71 => 25,  62 => 19,  59 => 18,  56 => 17,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/* <style>*/
/* .sf-toolbar-block-config img {*/
/*     height: auto;*/
/*     top: 6px !important;*/
/* }*/
/* .sf-toolbar-block-config a {*/
/*     text-decoration: none;*/
/* }*/
/* .sf-toolbar-block-config .sf-toolbar-info {*/
/*     min-width: 220px;*/
/* }*/
/* </style>*/
/*     {# PHP Information #}*/
/*     {% set icon %}*/
/*         <span class="sf-toolbar-label">*/
/*         <a href="{{ path('_profiler_phpinfo') }}">*/
/*             <img width="26" height="28" alt="PHP" src="data:image/png;base64,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">*/
/*         </a>*/
/*         </span>*/
/* */
/*     {% endset %}*/
/* */
/* */
/*     {% set text %}*/
/*         {% spaceless %}*/
/*             <div class="sf-toolbar-info-piece sf-toolbar-info-php">*/
/*                 <b>PHP</b>*/
/*                 <span>{{ collector.phpversion }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece sf-toolbar-info-php-ext">*/
/*                 <b>PHP Extensions</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}">xdebug</span>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}">accel</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>PHP SAPI</b>*/
/*                 <span>{{ collector.sapiName }}</span>*/
/*             </div>*/
/*         {% endspaceless %}*/
/*     {% endset %}*/
/*     {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">*/
/*     <path fill="#AAAAAA" d="M11,5.1C11,3.4,9.6,2,7.9,2H5.1C3.4,2,2,3.4,2,5.1v12.9C2,19.6,3.4,21,5.1,21h2.9c1.7,0,3.1-1.4,3.1-3.1V5.1z M5.2,4h2.7C8.4,4,9,4.8,9,5.3V11H4V5.3C4,4.8,4.6,4,5.2,4z M22,5.1C22,3.4,20.6,2,18.9,2h-2.9C14.4,2,13,3.4,13,5.1v12.9c0,1.7,1.4,3.1,3.1,3.1h2.9c1.7,0,3.1-1.4,3.1-3.1V5.1z M16,4h2.8C19.4,4,20,4.8,20,5.3V8h-5V5.3C15,4.8,15.5,4,16,4z"/>*/
/* </svg>*/
/* </span>*/
/*     <strong>Config</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Project Configuration</h2>*/
/*     <table>*/
/*         <tr>*/
/*             <th>Key</th>*/
/*             <th>Value</th>*/
/*         </tr>*/
/*         <tr>*/
/*             {% if collector.applicationname %}*/
/*                 <th>Application</th>*/
/*                 <td>{{ collector.applicationname }} {{ collector.applicationversion }} (on Symfony {{ collector.symfonyversion }})</td>*/
/*             {% else %}*/
/*                 <th>Symfony version</th>*/
/*                 <td>{{ collector.symfonyversion }}</td>*/
/*             {% endif %}*/
/*         </tr>*/
/*         {% if 'n/a' != collector.appname %}*/
/*             <tr>*/
/*                 <th>Application name</th>*/
/*                 <td>{{ collector.appname }}</td>*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if 'n/a' != collector.env %}*/
/*             <tr>*/
/*                 <th>Environment</th>*/
/*                 <td>{{ collector.env }}</td>*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if 'n/a' != collector.debug %}*/
/*             <tr>*/
/*                 <th>Debug</th>*/
/*                 <td>{{ collector.debug ? 'enabled' : 'disabled' }}</td>*/
/*             </tr>*/
/*         {% endif %}*/
/*     </table>*/
/* */
/*     <h2>PHP configuration</h2>*/
/*     <table>*/
/*         <tr>*/
/*             <th>Key</th>*/
/*             <th>Value</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>PHP version</th>*/
/*             <td>{{ collector.phpversion }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Xdebug</th>*/
/*             <td>{{ collector.hasxdebug ? 'enabled' : 'disabled' }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>PHP acceleration</th>*/
/*             <td>{{ collector.hasaccelerator ? 'enabled' : 'disabled' }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>XCache</th>*/
/*             <td>{{ collector.hasxcache ? 'enabled' : 'disabled' }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>APC</th>*/
/*             <td>{{ collector.hasapc ? 'enabled' : 'disabled' }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Zend OPcache</th>*/
/*             <td>{{ collector.haszendopcache ? 'enabled' : 'disabled' }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>EAccelerator</th>*/
/*             <td>{{ collector.haseaccelerator ? 'enabled' : 'disabled' }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Full PHP configuration</th>*/
/*             <td><a href="{{ path('_profiler_phpinfo') }}"><code>phpinfo</code></a></td>*/
/*         </tr>*/
/*     </table>*/
/* */
/*     {% if collector.bundles %}*/
/*         <h2>Active bundles</h2>*/
/*         <table>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Path</th>*/
/*             </tr>*/
/*             {% set bundles = collector.bundles %}*/
/*             {% for name in bundles|keys|sort %}*/
/*             <tr>*/
/*                 <th>{{ name }}</th>*/
/*                 <td>{{ bundles[name] }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
