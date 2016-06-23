<?php

/* @bolt/_nav/_macros.twig */
class __TwigTemplate_5b38f38eb41129c0890ec55b066b398bc4daa0a189abfc74b03feafc12fc7c57 extends Twig_Template
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
        $__internal_0d8ed9196a6901fc472f3fc2c28b9a4d4c6cdb0758db47757ca3e043babfdae9 = $this->env->getExtension("native_profiler");
        $__internal_0d8ed9196a6901fc472f3fc2c28b9a4d4c6cdb0758db47757ca3e043babfdae9->enter($__internal_0d8ed9196a6901fc472f3fc2c28b9a4d4c6cdb0758db47757ca3e043babfdae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_macros.twig"));

        // line 10
        echo "

";
        // line 76
        echo "

";
        // line 95
        echo "

";
        // line 111
        echo "

";
        // line 126
        echo "

";
        
        $__internal_0d8ed9196a6901fc472f3fc2c28b9a4d4c6cdb0758db47757ca3e043babfdae9->leave($__internal_0d8ed9196a6901fc472f3fc2c28b9a4d4c6cdb0758db47757ca3e043babfdae9_prof);

    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ce0b1360b4b28942eaa7533098bcd603d5715a521e14e854498fbc94f2463f63 = $this->env->getExtension("native_profiler");
            $__internal_ce0b1360b4b28942eaa7533098bcd603d5715a521e14e854498fbc94f2463f63->enter($__internal_ce0b1360b4b28942eaa7533098bcd603d5715a521e14e854498fbc94f2463f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "heading"));

            // line 5
            echo "    ";
            $context["__internal_3d120e5ff17e9714e9a0bcdd87cfec248841f222902b0a4724e2cf599b1ce2e0"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            echo $context["__internal_3d120e5ff17e9714e9a0bcdd87cfec248841f222902b0a4724e2cf599b1ce2e0"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["title"]) ? $context["title"] : null));
            echo "</em>
    </li>
";
            
            $__internal_ce0b1360b4b28942eaa7533098bcd603d5715a521e14e854498fbc94f2463f63->leave($__internal_ce0b1360b4b28942eaa7533098bcd603d5715a521e14e854498fbc94f2463f63_prof);

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
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null, $__force_submenu__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
            "force_submenu" => $__force_submenu__,
            "varargs" => func_num_args() > 7 ? array_slice(func_get_args(), 7) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_597c7f49b901f5dc3a27a3c6d380cabf53e38ef9a284964b911deafd1ebda1e5 = $this->env->getExtension("native_profiler");
            $__internal_597c7f49b901f5dc3a27a3c6d380cabf53e38ef9a284964b911deafd1ebda1e5->enter($__internal_597c7f49b901f5dc3a27a3c6d380cabf53e38ef9a284964b911deafd1ebda1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submenu"));

            // line 23
            echo "
    ";
            // line 24
            $context["__internal_9b5bf57a1164517e82c5970f84a57f08f6910c2bbb003229a049eaca041b545e"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty((isset($context["subitems"]) ? $context["subitems"] : null))) {
                // line 27
                echo "        ";
                $context["subitems"] = (isset($context["popoveritems"]) ? $context["popoveritems"] : null);
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context["allowedamount"] = 0;
            // line 33
            echo "    ";
            $context["allowedsingle"] = "";
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subitems"]) ? $context["subitems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "        ";
                if ((($context["item"] != "-") && $this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 36
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 37
                    echo "            ";
                    $context["allowedamount"] = ((isset($context["allowedamount"]) ? $context["allowedamount"] : null) + 1);
                    // line 38
                    echo "            ";
                    $context["allowedsingle"] = $context["item"];
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            $context["class"] = trim(((((isset($context["wide"]) ? $context["wide"] : null)) ? (" menu-pop-wide") : ("")) . (((isset($context["active"]) ? $context["active"] : null)) ? (" active") : (""))));
            // line 43
            echo "
    ";
            // line 45
            echo "    ";
            if ((isset($context["allowedany"]) ? $context["allowedany"] : null)) {
                // line 46
                echo "        <li";
                if ((isset($context["class"]) ? $context["class"] : null)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 47
                if ((((isset($context["allowedamount"]) ? $context["allowedamount"] : null) == 1) &&  !((array_key_exists("force_submenu", $context)) ? (_twig_default_filter((isset($context["force_submenu"]) ? $context["force_submenu"] : null), false)) : (false)))) {
                    // line 48
                    echo "                ";
                    $context["item"] = (isset($context["allowedsingle"]) ? $context["allowedsingle"] : null);
                    // line 49
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 50
                    echo $context["__internal_9b5bf57a1164517e82c5970f84a57f08f6910c2bbb003229a049eaca041b545e"]->geticon($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()), "icon");
                    echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("general.phrase.no-content")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("general.phrase.no-content")) . ")</em>")));
                    echo "
                </a>
            ";
                } else {
                    // line 53
                    echo "                <a  href=\"";
                    if ((isset($context["popoveritems"]) ? $context["popoveritems"] : null)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["popoveritems"]) ? $context["popoveritems"] : null), 0, array()), "link", array()), "html", null, true);
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 54
                    echo $context["__internal_9b5bf57a1164517e82c5970f84a57f08f6910c2bbb003229a049eaca041b545e"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 57
                    $context["divider"] = false;
                    // line 58
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["popoveritems"]) ? $context["popoveritems"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 59
                        echo "                        ";
                        if (($context["item"] == "-")) {
                            // line 60
                            echo "                            ";
                            $context["divider"] = true;
                            // line 61
                            echo "                        ";
                        } elseif ($this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard")))) {
                            // line 62
                            echo "                            <li";
                            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                            echo "\">
                                    ";
                            // line 64
                            echo $context["__internal_9b5bf57a1164517e82c5970f84a57f08f6910c2bbb003229a049eaca041b545e"]->geticon($this->getAttribute($context["item"], "icon", array()));
                            echo (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("general.phrase.no-content")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("general.phrase.no-content")) . ")</em>")));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 67
                            $context["divider"] = false;
                            // line 68
                            echo "                        ";
                        }
                        // line 69
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                </ul>
            ";
                }
                // line 72
                echo "        </li>
    ";
            }
            // line 74
            echo "
";
            
            $__internal_597c7f49b901f5dc3a27a3c6d380cabf53e38ef9a284964b911deafd1ebda1e5->leave($__internal_597c7f49b901f5dc3a27a3c6d380cabf53e38ef9a284964b911deafd1ebda1e5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getcollapse()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_dfa62bee86c9226a8740ac0821dcc18cdef5cc3d2369f4d6161c9f0b79121289 = $this->env->getExtension("native_profiler");
            $__internal_dfa62bee86c9226a8740ac0821dcc18cdef5cc3d2369f4d6161c9f0b79121289->enter($__internal_dfa62bee86c9226a8740ac0821dcc18cdef5cc3d2369f4d6161c9f0b79121289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collapse"));

            // line 82
            echo "    ";
            $context["__internal_0fd0517ca87f9acd4a9e4ac22b01cb05ca8806816bac62ed2b34af509991ca89"] = $this;
            // line 83
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            ";
            // line 86
            echo $context["__internal_0fd0517ca87f9acd4a9e4ac22b01cb05ca8806816bac62ed2b34af509991ca89"]->getlabel("fa:compress", $this->env->getExtension('Bolt')->trans("general.phrase.collapse-sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            ";
            // line 91
            echo $context["__internal_0fd0517ca87f9acd4a9e4ac22b01cb05ca8806816bac62ed2b34af509991ca89"]->getlabel("fa:expand", $this->env->getExtension('Bolt')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
            
            $__internal_dfa62bee86c9226a8740ac0821dcc18cdef5cc3d2369f4d6161c9f0b79121289->leave($__internal_dfa62bee86c9226a8740ac0821dcc18cdef5cc3d2369f4d6161c9f0b79121289_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fe8be6c082cfb2724db0d259e0a5632ad1ddb4d3cc9f085695863b09020a430c = $this->env->getExtension("native_profiler");
            $__internal_fe8be6c082cfb2724db0d259e0a5632ad1ddb4d3cc9f085695863b09020a430c->enter($__internal_fe8be6c082cfb2724db0d259e0a5632ad1ddb4d3cc9f085695863b09020a430c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 101
            echo "    ";
            $context["__internal_8aabb3cc93371de81307173fe7d0283a1fd7e28f9aad2d836dcdbd17453c2431"] = $this;
            // line 102
            echo "    ";
            $context["class"] = "";
            // line 103
            echo "    ";
            if (((isset($context["pathname"]) ? $context["pathname"] : null) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 104
            echo "    ";
            if ((isset($context["active"]) ? $context["active"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active");
            }
            // line 105
            echo "    ";
            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " divider");
            }
            // line 106
            echo "
    <li";
            // line 107
            if ((isset($context["class"]) ? $context["class"] : null)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, trim((isset($context["class"]) ? $context["class"] : null)), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath((isset($context["pathname"]) ? $context["pathname"] : null));
            echo "\">";
            echo $context["__internal_8aabb3cc93371de81307173fe7d0283a1fd7e28f9aad2d836dcdbd17453c2431"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
            echo "</a>
    </li>
";
            
            $__internal_fe8be6c082cfb2724db0d259e0a5632ad1ddb4d3cc9f085695863b09020a430c->leave($__internal_fe8be6c082cfb2724db0d259e0a5632ad1ddb4d3cc9f085695863b09020a430c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlabel($__icon__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_32a73df63bd692abcc110eb4f0fbb9273c4d92092a525a0c3e189286540bbcf4 = $this->env->getExtension("native_profiler");
            $__internal_32a73df63bd692abcc110eb4f0fbb9273c4d92092a525a0c3e189286540bbcf4->enter($__internal_32a73df63bd692abcc110eb4f0fbb9273c4d92092a525a0c3e189286540bbcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label"));

            // line 117
            echo "    ";
            $context["__internal_d693ce8b4985c541a81f13a26bc978a25429b3ec8ce29c5de706bc038cda0f42"] = $this;
            // line 118
            echo "
    ";
            // line 119
            if (twig_test_empty((isset($context["icon"]) ? $context["icon"] : null))) {
                // line 120
                echo "        <i class=\"icon\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["label"]) ? $context["label"] : null), 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif ((            // line 121
(isset($context["icon"]) ? $context["icon"] : null) != "-")) {
                // line 122
                echo "        ";
                echo $context["__internal_d693ce8b4985c541a81f13a26bc978a25429b3ec8ce29c5de706bc038cda0f42"]->geticon((isset($context["icon"]) ? $context["icon"] : null), true);
                echo "
    ";
            }
            // line 124
            echo "    ";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "
";
            
            $__internal_32a73df63bd692abcc110eb4f0fbb9273c4d92092a525a0c3e189286540bbcf4->leave($__internal_32a73df63bd692abcc110eb4f0fbb9273c4d92092a525a0c3e189286540bbcf4_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function geticon($__icon__ = null, $__box__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_84f8279e8b7ec4d2b5b65341818178df4b7fa86a43ba493e410f5a4f4c1450d2 = $this->env->getExtension("native_profiler");
            $__internal_84f8279e8b7ec4d2b5b65341818178df4b7fa86a43ba493e410f5a4f4c1450d2->enter($__internal_84f8279e8b7ec4d2b5b65341818178df4b7fa86a43ba493e410f5a4f4c1450d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "icon"));

            // line 132
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter((isset($context["box"]) ? $context["box"] : null), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 133
            echo "    ";
            // line 134
            echo "    ";
            if ((twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 0, 3) == "fa:")) {
                // line 135
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 3), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"></i>
    ";
                // line 137
                echo "    ";
            } else {
                // line 138
                echo "        <i class=\"fa fa-question-circle ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo "\"></i>
    ";
            }
            
            $__internal_84f8279e8b7ec4d2b5b65341818178df4b7fa86a43ba493e410f5a4f4c1450d2->leave($__internal_84f8279e8b7ec4d2b5b65341818178df4b7fa86a43ba493e410f5a4f4c1450d2_prof);

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
        return "@bolt/_nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 138,  504 => 137,  497 => 135,  494 => 134,  492 => 133,  489 => 132,  473 => 131,  452 => 124,  446 => 122,  444 => 121,  439 => 120,  437 => 119,  434 => 118,  431 => 117,  415 => 116,  392 => 108,  384 => 107,  381 => 106,  376 => 105,  371 => 104,  366 => 103,  363 => 102,  360 => 101,  341 => 100,  319 => 91,  311 => 86,  306 => 83,  303 => 82,  289 => 81,  270 => 74,  266 => 72,  262 => 70,  256 => 69,  253 => 68,  251 => 67,  244 => 64,  240 => 63,  233 => 62,  230 => 61,  227 => 60,  224 => 59,  219 => 58,  217 => 57,  211 => 54,  202 => 53,  195 => 50,  190 => 49,  187 => 48,  185 => 47,  176 => 46,  173 => 45,  170 => 43,  168 => 42,  165 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 37,  147 => 36,  144 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  127 => 29,  124 => 28,  121 => 27,  119 => 26,  116 => 25,  114 => 24,  111 => 23,  90 => 22,  69 => 7,  66 => 6,  63 => 5,  47 => 4,  38 => 126,  34 => 111,  30 => 95,  26 => 76,  22 => 10,);
    }
}
/* {##*/
/*  # Sidebar-menu heading*/
/*  #}*/
/* {% macro heading(title, icon) %}*/
/*     {% from _self import label %}*/
/*     <li class="divider">*/
/*         <em>{{ label(icon, title) }}</em>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu blocks with links, popover (for desktop) and touch-to-show (for mobile)*/
/*  #*/
/*  # @param string  icon*/
/*  # @param string  label (default: slug())*/
/*  # @param array   popoveritems*/
/*  # @param bool    active*/
/*  # @param bool    wide*/
/*  # @param array   subitems*/
/*  #}*/
/* {% macro submenu(icon, label, popoveritems, active, wide, subitems, force_submenu) %}*/
/* */
/*     {% from _self import label, icon %}*/
/* */
/*     {% if subitems is empty %}*/
/*         {% set subitems = popoveritems %}*/
/*     {% endif %}*/
/* */
/*     {# Only display the 'root' option, if any of the subitems are allowed to be shown. #}*/
/*     {% set allowedany = false %}*/
/*     {% set allowedamount = 0 %}*/
/*     {% set allowedsingle = "" %}*/
/*     {% for item in subitems %}*/
/*         {% if item != '-' and isallowed(item.isallowed|default('dashboard')) %}*/
/*             {% set allowedany = true %}*/
/*             {% set allowedamount = allowedamount + 1 %}*/
/*             {% set allowedsingle = item %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set class = ((wide ? ' menu-pop-wide' : '') ~ (active ? ' active' : ''))|trim %}*/
/* */
/*     {# Show stuff! #}*/
/*     {% if allowedany %}*/
/*         <li{% if class %} class="{{ class }}"{% endif %}>*/
/*             {% if allowedamount == 1 and not force_submenu|default(false) %}*/
/*                 {% set item = allowedsingle %}*/
/*                 <a href="{{ item.link }}">*/
/*                     {{ icon(item.icon, "icon") }}{{ item.label|default("<em>(" ~ __('general.phrase.no-content') ~ ")</em>")|raw }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a  href="{% if popoveritems %}{{ popoveritems.0.link }}{% else %}#{% endif %}" class="menu-pop">*/
/*                     {{ label(icon, label) }}*/
/*                 </a>*/
/*                 <ul class="nav submenu">*/
/*                     {% set divider = false %}*/
/*                     {% for item in popoveritems %}*/
/*                         {% if item == '-' %}*/
/*                             {% set divider = true %}*/
/*                         {% elseif isallowed(item.isallowed|default('dashboard')) %}*/
/*                             <li{% if divider %} class="subdivider"{% endif %}>*/
/*                                 <a href="{{ item.link }}">*/
/*                                     {{ icon(item.icon) }}{{ item.label|default("<em>(" ~ __('general.phrase.no-content') ~ ")</em>")|raw }}*/
/*                                 </a>*/
/*                             </li>*/
/*                             {% set divider = false %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endif %}*/
/* */
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu collapse/expand*/
/*  #}*/
/* {% macro collapse() %}*/
/*     {% from _self import label %}*/
/* */
/*     <li class="nav-secondary-collapse">*/
/*         <a href="#">*/
/*             {{ label('fa:compress', __('general.phrase.collapse-sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/*     <li class="nav-secondary-expand">*/
/*         <a href="#">*/
/*             {{ label('fa:expand', __('Expand sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu link*/
/*  #}*/
/* {% macro link(icon, label, pathname, active, divider) %}*/
/*     {% from _self import label %}*/
/*     {% set class = '' %}*/
/*     {% if pathname == 'dashboard' %}{% set class = 'nav-secondary-dashboard' %}{% endif %}*/
/*     {% if active %}{% set class = class ~ ' active' %}{% endif %}*/
/*     {% if divider %}{% set class = class ~ ' divider' %}{% endif %}*/
/* */
/*     <li{% if class %} class="{{ class|trim }}" {% endif %}>*/
/*         <a href="{{ path(pathname) }}">{{ label(icon, label) }}</a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu label*/
/*  #}*/
/* {% macro label(icon, label) %}*/
/*     {% from _self import icon %}*/
/* */
/*     {% if icon is empty %}*/
/*         <i class="icon">{{ label|slice(0, 1) }}</i>*/
/*     {% elseif icon != '-' %}*/
/*         {{ icon(icon, true) }}*/
/*     {% endif %}*/
/*     {{ label|raw }}*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Icon*/
/*  #}*/
/* {% macro icon(icon, box) %}*/
/*     {% set class = box|default(false) ? 'icon' : 'fa-fw' %}*/
/*     {# Font Awsome #}*/
/*     {% if icon|slice(0,3) == 'fa:' %}*/
/*         <i class="fa fa-{{ icon|slice(3) }} {{ class }}"></i>*/
/*     {# Defaults to (?) #}*/
/*     {% else %}*/
/*         <i class="fa fa-question-circle {{ class }}" title="{{ icon }}"></i>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
