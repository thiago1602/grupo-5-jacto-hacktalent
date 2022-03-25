import React from "react";
import { HeaderAppBar, HeaderLogo } from "./Header.style";
import { Toolbar,Container } from "@material-ui/core";

const Header: React.FC = () => {
  return (
    <HeaderAppBar position={'sticky'}>
      <Toolbar component={Container}>
        <HeaderLogo
          src={"/img/logos/logo-icon.png"}
          alt={"Agrolab"}></HeaderLogo>
      </Toolbar>
    </HeaderAppBar>
  );
};

export default Header;
