const { Component } = React;
const { StyleSheet } = jss;
const jss = jss.default;

const cardData = [
 {
  type: "Location",
  tag: "First",
  info: "Venice Beach",
  image:
   "https://images.unsplash.com/photo-1533619043865-1c2e2f32ff2f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c3fb9eaca7a85f5b42868eb5763c5ed1&auto=format&fit=crop&w=1950&q=80"
 },
 {
  type: "Location",
  tag: "Second",
  info: "Venice Beach",
  image:
   "https://images.unsplash.com/photo-1534409296443-e075ba5a5cbf?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d2b4598fb372b5fdb483a8d06892c555&auto=format&fit=crop&w=1909&q=80"
 },
 {
  type: "Location",
  tag: "Third",
  info: "Venice Beach",
  image:
   "https://images.unsplash.com/photo-1519940640025-75fdf32010d7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=985117cd38a36d15bad22efdde61f5a8&auto=format&fit=crop&w=934&q=80"
 },
 {
  type: "Location",
  tag: "Fourth",
  info: "Venice Beach",
  image:
   "https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aa8c60909a4001de89272e6a352a5e84&auto=format&fit=crop&w=724&q=80"
 },
 {
  type: "Location",
  tag: "Fifth",
  info: "Venice Beach",
  image:
   "https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=aa8c60909a4001de89272e6a352a5e84&auto=format&fit=crop&w=724&q=80"
 }
];

type CardType = "location" | "profile" | "product";

type InfoBadgeProps = {
 badgeType: "primary" | "secondary",
 type: CardType,
 info: string,
 style: any
};

const badgeStyles = {
 badge: {
  width: "auto",
  padding: "4px 8px",
  position: "absolute",
  fontSize: 12,
  fontWeight: 500,
  borderRadius: 3,
  boxShadow: "0 2px 6px rgba(0, 0, 0, .25)",
  zIndex: 100,
  transition:
   "transform .2s linear, opacity 0s linear 0s, visibility 0s linear 0.3s",
  transitionTimingFunction: "cubic-bezier(0, 0.2, 0.25, 1), linear, linear"
 },
 primary: {
  backgroundColor: "#FFFFFF",
  position: "absolute",
  bottom: 12,
  left: 12
 },
 secondary: {
  background: "rgba(0,0,0,.2)",
  color: "#FFFFFF",
  position: "absolute",
  top: 12,
  left: 12,
  padding: "5px 8px",
  boxShadow: "none"
 }
};

const InfoBadge: React.SFC<InfoBadgeProps> = props => {
 const { classes } = jss.createStyleSheet(badgeStyles).attach();
 const { badgeType, info, style } = props;
 return (
  <div
   className={
    badgeType === "primary"
     ? `${classes.badge} ${classes.primary}`
     : `${classes.badge} ${classes.secondary}`
   }
   style={style}
  >
   {badgeType === "location" && <i className={"fa fa-facebook"} />}
   {info}
  </div>
 );
};

type CardItem = {
 type: CardType,
 image: string,
 info: string,
 tag: string,
 style?: any,
 cardStyle?: any,
 badgeStyle?: any
};

jss.setup(jssPreset.default());

const cardStyles = {
 cardWrapper: {
  position: "relative",
  width: 235,
  height: "auto"
 },
 card: {
  width: "100%",
  height: 345,
  backgroundSize: "cover",
  backgroundPosition: "center",
  backgroundRepeat: "no-repeat",
  backgroundSize: "cover",
  borderRadius: 8,
  boxShadow: "0 7px 11px #15a7bf",
  cursor: "pointer",
  "&:hover": {
   transform: "scale(1.05)"
  }
 }
};

const CardComponent: React.SFC<CardItem> = props => {
 const { classes } = jss.createStyleSheet(cardStyles).attach();
 const { image, info, type, tag, style, cardStyle, badgeStyle } = props;
 const backgroundImage = { backgroundImage: `url(${image})` };

 const styles = { ...cardStyle, ...backgroundImage };

 return (
  <div className={classes.cardWrapper} style={style}>
   <InfoBadge badgeType="primary" info={tag} type={type} style={badgeStyle} />
   <InfoBadge badgeType="seondary" info={info} type={type} style={badgeStyle} />
   <div className={classes.card} style={styles} />
  </div>
 );
};

const styles = {
 carouselWrapper: {
  display: "flex",
  width: 300,
  position: "relative"
 },
 cardStack: {
  width: 300
 },
 stackedItem: {
  position: "absolute",
  height: "100%",
  display: "flex",
  alignItems: "center",
  transition:
   "transform .4s linear, opacity .2s linear .2s, visibility 0s linear .4s",
  transitionTimingFunction: "cubic-bezier(0, .2, .25, 1), linear, linear"
 },
 temporaryButtons: {
  display: "block",
  position: "absolute",
  bottom: "-50px",
  left: "50%",
  transform: "translate(-50%)"
 }
};

type Direction = "top" | "bottom" | "right" | "left";

type Props = {
 direction: Direction,
 width: string | number,
 height: string | number,
 items: CardItem[],
 numberOfSlides: number,
 activeCard: number,
 onActiveCardChange: (activeCard: number) => void
};

 const slideStyle = (index: number, activeCard: number): React.CSSProperties => {
 const diff = index - activeCard
 const absDiff = Math.abs(diff);
 const fallOff = diff > 0 ? 0.79 : 0.6;
 const translation = diff * (diff > 0 ? 28 : 175)
 return {
  transform: `scale(${Math.pow(fallOff, absDiff)}) translateX(${translation}%)`,
  opacity: Math.pow(fallOff, diff),
  transitionTimingFunction: "cubic-bezier(0.885, 0.3355, 0.7725, 1.03), linear, linear !important",
  boxShadow: index > activeCard ? 'none' : 'inherit',
  zIndex: 102 - index
 }
}
 
const CardCarousel: React.SFC<Props> = props => {
 const { classes } = jss.createStyleSheet(styles).attach();

 const {
  direction,
  width,
  height,
  activeCard,
  items,
  numberOfSlides,
  onActiveCardChange
 } = props;

 const handleSlide = direction => {
  const activeCard = props.activeCard;
  if (direction === "left") {
   onActiveCardChange(activeCard - 1);
  } else if (direction === "right") {
   onActiveCardChange(activeCard + 1);
  }
 };

 return (
  <div className={classes.carouselWrapper}>
   <div className={classes.cardStack} style={{ width: width, height: height }}>
    {items.map((item, index) => {
     return (
      <div
       className={classes.stackedItem}
       key={index}
       onClick={() => onActiveCardChange(index)}
       style={slideStyle(index, activeCard)}
      >
       <CardComponent
        type={item.type}
        tag={item.tag}
        info={item.info}
        image={item.image}
        badgeStyle={index !== activeCard ? { opacity: 0 } : {}}
       />
      </div>
     );
    })}
   </div>
   {/* Temporary */}
   <div className={classes.temporaryButtons}>
    <button
     onClick={() => handleSlide("left")}
     style={activeCard === 0 ? { visibility: "hidden" } : {}}
    >
     Slide Left
    </button>
    <button
     onClick={() => handleSlide("right")}
     style={activeCard === items.length - 1 ? { visibility: "hidden" } : {}}
    >
     Slide Right
    </button>
   </div>
   {/* End Temporary */}
  </div>
 );
};

type DemoProps = {
 items: cardItem[],
 numberOfSlides: number
};
type DemoState = {
 activeCard: number
};

class SlideDemo extends Component<DemoProps, DemoState> {
 state: DemoState = {
  activeCard: 0
 };
 changeCard = value => {
  this.setState({ activeCard: value });
 };
 render() {
  return (
   <CardCarousel
    width={300}
    height={345}
    items={this.props.items}
    activeCard={this.state.activeCard}
    onActiveCardChange={this.changeCard}
   />
  );
 }
}

ReactDOM.render(
 <SlideDemo items={cardData} numberOfSlides={3} direction={"left"} />,
 document.querySelector(".app-inner")
);
