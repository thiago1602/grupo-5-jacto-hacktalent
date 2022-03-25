import React from 'react';
import {
    UserinformationContainer,
    UserName,
    UserDescription,
    AvatarStyled,
    RatingStyled
} from './Userinformation.style';

interface UserinformationProps{
    picture: string;
    name: string;
    rating: number;
    description?: string;
}
const Userinformation: React.FC<UserinformationProps> = ({
    name, picture, rating, description,
}) => {
    return <UserinformationContainer>
        <AvatarStyled src={picture}/>
        <UserName>{name}</UserName>
        <RatingStyled readOnly value={rating}/>
        <UserDescription>{description}</UserDescription>
    </UserinformationContainer>
};

export default Userinformation;