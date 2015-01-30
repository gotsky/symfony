<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_0bc56b3c57e7d8dee42ab83379ddea9fd991ce75d9dc1aaac24e730343b3f8af extends Twig_Template
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
        // line 2
        echo "
<html>
  <body>
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  19 => 2,);
    }
}
