<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_3a8697f2d1e6d6d0e1bd8b180a1564a413f8167bc5e9b37fba683678a105c763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("OCPlatformBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <div style=\"float: left; margin-right: 1em;\">
    ";
        // line 13
        echo "    ";
        if ( !(null === $this->getAttribute($this->getContext($context, "advert"), "image", array()))) {
            // line 14
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "advert"), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "advert"), "image", array()), "alt", array()), "html", null, true);
            echo "\" height=\"60\">
    ";
        }
        // line 16
        echo "  </div>

  <h2>
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "advert"), "title", array()), "html", null, true);
        echo "
  </h2>
  <i>Par ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "advert"), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "advert"), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\" style=\"clear: both;\">
    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "advert"), "content", array()), "html", null, true);
        echo "
  </div>

  ";
        // line 27
        if ( !$this->getAttribute($this->getAttribute($this->getContext($context, "advert"), "categories", array()), "empty", array())) {
            // line 28
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "advert"), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 32
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </p>
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if ((twig_length_filter($this->env, $this->getContext($context, "listAdvertSkills")) > 0)) {
            // line 37
            echo "    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listAdvertSkills"));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 41
                echo "          <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </ul>
    </div>
  ";
        }
        // line 46
        echo "
  <p>
    <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute($this->getContext($context, "advert"), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute($this->getContext($context, "advert"), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 56,  177 => 52,  170 => 48,  166 => 46,  161 => 43,  150 => 41,  146 => 40,  141 => 37,  139 => 36,  136 => 35,  132 => 33,  118 => 32,  112 => 31,  95 => 30,  91 => 28,  89 => 27,  83 => 24,  75 => 21,  70 => 19,  65 => 16,  57 => 14,  54 => 13,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}
