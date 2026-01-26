import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from '@/components/ui/accordion';

const FAQ = () => {
  const faqs = [
    {
      question: 'Como funciona o atendimento online?',
      answer: 'O atendimento é realizado por videochamada através de uma plataforma segura e sigilosa. Você pode realizar as sessões do conforto da sua casa, precisando apenas de um dispositivo com câmera e internet estável.',
    },
    {
      question: 'Quanto tempo dura cada sessão?',
      answer: 'Cada sessão tem duração de aproximadamente 50 minutos, tempo ideal para um trabalho terapêutico aprofundado e eficaz.',
    },
    {
      question: 'Com que frequência devo fazer as sessões?',
      answer: 'A frequência é definida de acordo com cada caso. Geralmente, iniciamos com sessões semanais e, conforme a evolução do tratamento, podemos espaçar para quinzenais.',
    },
    {
      question: 'Qual é a diferença entre psicoterapia e neuropsicoterapia?',
      answer: 'A neuropsicoterapia integra os conhecimentos da neurociência à prática psicoterapêutica, permitindo uma compreensão mais profunda de como o cérebro processa emoções e traumas, resultando em tratamentos mais eficazes.',
    },
    {
      question: 'Você atende plano de saúde?',
      answer: 'Atualmente, o atendimento é particular. Porém, forneço recibo que pode ser utilizado para reembolso em alguns planos de saúde.',
    },
    {
      question: 'Quanto tempo leva para ver resultados?',
      answer: 'O tempo varia de acordo com cada pessoa e suas demandas. Alguns pacientes relatam melhoras significativas nas primeiras sessões, enquanto processos mais profundos podem levar alguns meses.',
    },
  ];

  return (
    <section id="faq" className="section-padding bg-muted/30">
      <div className="container mx-auto px-4 max-w-3xl">
        <div className="text-center mb-12">
          <span className="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
            FAQ
          </span>
          <h2 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-4">
            Perguntas frequentes
          </h2>
          <p className="text-muted-foreground">
            Tire suas dúvidas sobre o atendimento e tratamento.
          </p>
        </div>
        
        <Accordion type="single" collapsible className="w-full">
          {faqs.map((faq, index) => (
            <AccordionItem key={index} value={`item-${index}`} className="bg-card mb-3 rounded-lg border border-border px-4">
              <AccordionTrigger className="font-serif text-left font-semibold text-foreground hover:no-underline">
                {faq.question}
              </AccordionTrigger>
              <AccordionContent className="text-muted-foreground pb-4">
                {faq.answer}
              </AccordionContent>
            </AccordionItem>
          ))}
        </Accordion>
      </div>
    </section>
  );
};

export default FAQ;
